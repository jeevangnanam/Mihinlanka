<?php

class BannersController extends AdminAppController {

    var $name = 'Banners';

    function index() {
        $this->Banner->recursive = 0;
        $this->set('banners', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid banner', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('banner', $this->Banner->read(null, $id));
    }

    function startstop($id = null){
        if(isset($id)){
            $banner = ($this->Banner->read(null,$id));
            if($banner['Banner']['status'] == 'APPROVED'){
                $this->Banner->set('status','NOT_APPROVED');
                $this->Banner->save();
                $this->redirect('/admin/banners');
            }else{
                $this->Banner->set('status','APPROVED');
                $this->Banner->save();
                $this->redirect('/admin/banners');
            }
        }
    }
    function add() {
        if (!empty($this->data)) {
            $this->Banner->create();
            if ($this->data['banner']['file_path']['name'] != '') {
                $file = $this->uploadFiles('img/banners', $this->data['banner']);



                $this->data['Banner']['file_path'] = $file['urls'][0];
                if ($this->Banner->save($this->data)) {

                    $this->Session->setFlash(__('The banner has been saved', true));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The banner could not be saved. Please, try again.', true));
                }
            } else {

                $res = $this->Banner->save($this->data);
                $this->set('msg', 'Banner details are saved');
            }
        }
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid banner', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {

            if ($this->data['banner']['file_path']['name'] != '') {
                $file = $this->uploadFiles('img/banners', $this->data['banner']);



                $this->data['Banner']['file_path'] = $file['urls'][0];

                if ($this->Banner->save($this->data)) {
                    $this->Session->setFlash(__('The banner has been saved', true));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The banner could not be saved. Please, try again.', true));
                }
            } else {
                $res = $this->Banner->save($this->data);
                $this->set('msg', 'Banner details are saved');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Banner->read(null, $id);
        }
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for banner', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Banner->delete($id)) {
            $this->Session->setFlash(__('Banner deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Banner was not deleted', true));
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
        $permitted = array('image/jpeg', 'image/png', 'application/octet-stream', 'image/gif');


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