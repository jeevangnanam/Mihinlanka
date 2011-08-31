<?php
class SiteSectionsController extends AdminAppController {

	var $name = 'SiteSections';

	function index() {
		$this->SiteSection->recursive = 0;
		$this->set('siteSections', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid site section', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('siteSection', $this->SiteSection->read(null, $id,array('fields'=> array('id','section_name'))));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SiteSection->create();
			if ($this->SiteSection->save($this->data)) {
				$this->Session->setFlash(__('The site section has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site section could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid site section', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SiteSection->save($this->data)) {
				$this->Session->setFlash(__('The site section has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site section could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SiteSection->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for site section', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SiteSection->delete($id)) {
			$this->Session->setFlash(__('Site section deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Site section was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>