<?php

/**
 * SmoothTranslate behavior will leave your translation source
 * fields untouched and add default translation to the i18n table
 * for all locales which application uses.
 *
 * @author Sky_l3ppard
 * @version 2.1.2
 * @license MIT
 * @category Behaviors
 */
App::import('Behavior', 'Translate');

class SmoothTranslateBehavior extends TranslateBehavior {

    /**
     * Initiate behavior with specified settings.
     * Available settings are:
     *
     *         Array fields - translatable fields for the Translate behavior
     *
     *         Array except - fields which will still be touched then translating
     *
     *         Mixed locales - case: Array - list of locales for default translations
     *             to be added. case: String - name of the language model which must
     *             contain field "locale"
     *
     * @see cake/libs/model/ModelBehavior#setup($model, $config)
     * @return Void
     * @access Public
     */
    function setup(&$Model, $settings) {
        if (!isset($this->__settings[$Model->alias])) {
            $this->__settings[$Model->alias] = array(
                'fields' => array(),
                'except' => array(),
                'locales' => array()
            );
        }
        if (!is_array($settings)) {
            $settings = array();
        }
        $this->__settings[$Model->alias] = array_merge($this->__settings[$Model->alias], $settings);
        //setup Translate behavior with translatable fields
        return parent::setup($Model, $this->__settings[$Model->alias]['fields']);
    }

    /**
     * Callback executed before saving data. In this case it
     * will unset those fields which we want to leave untouched
     * then translating
     *
     * @see cake/libs/model/ModelBehavior#beforeSave($model)
     * @return Bolean - true to continue saving data
     * @access Public
     */
    function beforeSave(&$Model) {
        
        if (!empty($Model->data[$Model->alias]['id']) || !empty($Model->id)) {
            foreach ($this->__settings[$Model->alias]['fields'] as $key => $field) {
                $translatable_field = is_numeric($key) ? $field : $key;
                if (!in_array($translatable_field, $this->__settings[$Model->alias]['except'])) {
                    unset($Model->data[$Model->alias][$field]);
                }
            }
        }
        return true;
    }
    /**
     * AfterSave callback.
     * Adds default translations to all languages included
     *
     * @see cake/libs/model/ModelBehavior#afterSave($model, $created)
     * @access Public
     * @return
     */
    function afterSave(&$Model, $created) {
        parent::afterSave($Model, $created);

        //return if record is currently modified
        if (!$created) {
            return true;
        }

        //get specified locale list or from database
        $locale_list = $this->__settings[$Model->alias]['locales'];
        if (!is_array($locale_list)) {
            $model_name = Inflector::classify($locale_list);
            if (!App::import('Model', $model_name)) {
                $this->log("SmoothTranslate, failed to import model: {$model_name}");
            } else {
                if (($pos = strpos($model_name, '.')) !== false) {
                    $pos += 1;
                    $model_name = substr ($model_name, $pos, strlen($model_name) - $pos);
                }
                $model_inst = new $model_name();
                $locale_list = $model_inst->find('list', array('fields' => array($model_name.'.locale')));
                unset($model_inst);
            }
        }
        //if non of new locales return
        if (empty($locale_list) || !is_array($locale_list)) {
            return true;
        }

        $conditions['model'] = $Model->alias;
        $conditions['foreign_key'] = $Model->id;
        $translation_model = &$this->translateModel($Model);
        $fields[] = $translation_model->alias.'.content';
        $default_locale = $this->_getLocale($Model);
//echo $default_locale;die();
        //add default translations for other locales
        foreach ($this->__settings[$Model->alias]['fields'] as $key => $field) {
            unset($conditions['content']);
            $conditions['locale'] = $default_locale;
            $conditions['field'] = is_numeric($key) ? $field : $key;

            $translation = $translation_model->find('first', compact('conditions', 'fields'));
            $conditions['content'] = $translation[$translation_model->alias]['content'];
            foreach ($locale_list as $locale) {
                if ($locale == $default_locale) {
                    continue;
                }
                $translation_model->create();
                $translation_model->save(
                    array($translation_model->alias => array_merge($conditions, array('locale' => $locale)))
                );
            }
        }
    }
}
?>