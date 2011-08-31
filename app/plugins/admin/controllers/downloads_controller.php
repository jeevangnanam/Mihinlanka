<?php

class DownloadsController extends AdminAppController {

    var $name = 'Downloads';

    function index() {
        $this->Download->recursive = 0;
        $this->set('downloads', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid download', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('download', $this->Download->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {

            if ($this->data['file']['path']['name'] != '') {
                $file = $this->uploadFiles('files/downloads/forms', $this->data['file']);

                $this->data['Download']['path'] = $file['urls'][0];
                $this->Download->create();
                if ($this->Download->save($this->data)) {
                    $this->Session->setFlash(__('The download has been saved', true));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The download could not be saved. Please, try again.', true));
                }
            } else {

                $this->Download->save($this->data);
                $this->Session->setFlash(__('The download has been saved', true));
                $this->redirect(array('action' => 'index'));
            }
        }
        $siteSections = $this->Download->SiteSection->find('list', array('fields' => array('id', 'section_name')));
        $fileTypes = $this->Download->FileType->find('list');
        $this->set(compact('siteSections', 'fileTypes'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid download', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {


            if ($this->data['file']['path']['name'] != '') {
             
                $file = $this->uploadFiles('files/downloads/forms', $this->data['file']);

                $this->data['Download']['path'] = $file['urls'][0];
                if ($this->Download->save($this->data)) {
                    $this->Session->setFlash(__('The download has been saved', true));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The download could not be saved. Please, try again.', true));
                }
            }else{
                    $this->Download->save($this->data);
                    $this->Session->setFlash(__('The download has been saved', true));
                    $this->redirect(array('action' => 'index'));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Download->read(null, $id);
        }
        $siteSections = $this->Download->SiteSection->find('list', array('fields' => array('id', 'section_name')));

        $fileTypes = $this->Download->FileType->find('list');
        $this->set(compact('siteSections', 'fileTypes'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for download', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Download->delete($id)) {
            $this->Session->setFlash(__('Download deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Download was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

    function uploadFiles($folder, $formdata, $itemId = null) {


        // setup dir names absolute and relative
        $folder_url = WWW_ROOT . $folder;
        $rel_url = $folder;

        // create the folder if it does not exist
        if (!is_dir($folder_url)) {
            mkdir($folder_url);
        }

        // if itemId is set create an item folder
        if ($itemId) {
            // set new absolute folder
            $folder_url = WWW_ROOT . $folder . '/' . $itemId;
            // set new relative folder
            $rel_url = $folder . '/' . $itemId;
            // create directory
            if (!is_dir($folder_url)) {
                mkdir($folder_url);
            }
        }

        // list of permitted file types, this is only images but documents can be added
        $permitted = array('application/pdf', 'application/msword', 'text/html', 'image/gif','image/jpeg','application/vnd.ms-excel','application/vnd.ms-excel','text/plain','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.openxmlformats-officedocument.presentationml.presentation');


        // loop through and deal with the files
        foreach ($formdata as $file) {

            // replace spaces with underscores
            $filename = str_replace(' ', '_', $file['name']);
            // assume filetype is false
            $typeOK = false;
            // check filetype is ok

            foreach ($permitted as $type) {
                if ($type == $file['type']) {
                    $typeOK = true;
                    break;
                }
            }

            // if file type ok upload the file
            if ($typeOK) {
                // switch based on error code
                switch ($file['error']) {
                    case 0:
                        // check filename already exists
                        if (!file_exists($folder_url . '/' . $filename)) {
                            // create full filename
                            $full_url = $folder_url . '/' . $filename;
                            $url = $rel_url . '/' . $filename;
                            // upload the file
                            $success = move_uploaded_file($file['tmp_name'], $url);
                        } else {
                            // create unique filename and upload file
                            ini_set('date.timezone', 'Europe/London');
                            $now = date('Y-m-d-His');
                            $full_url = $folder_url . '/' . $now . $filename;
                            $url = $rel_url . '/' . $now . $filename;
                            $success = move_uploaded_file($file['tmp_name'], $url);
                        }
                        // if upload was successful
                        if ($success) {
                            // save the url of the file
                            $result['urls'][] = "/" . $url;
                        } else {
                            $result['errors'][] = "Error uploaded $filename. Please try again.";
                        }
                        break;
                    case 3:
                        // an error occured
                        $result['errors'][] = "Error uploading $filename. Please try again.";
                        break;
                    default:
                        // an error occured
                        $result['errors'][] = "System error uploading $filename. Contact webmaster.";
                        break;
                }
            } elseif ($file['error'] == 4) {
                // no file was selected for upload
                $result['nofiles'][] = "No file Selected";
            } else {
                // unacceptable file type
                $result['errors'][] = "$filename cannot be uploaded. Acceptable file type is  <u>CSV</u> not tsv(Tab seperated).";
            }
        }
        return $result;
    }

}

?>