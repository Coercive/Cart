<?php
namespace Coercive\Shop\Cart\Ext;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
abstract class Entity {

###########################################################################################################
# SYSTEM

    /** @var bool */
    protected $_bIsModified = false;

    /** @var bool */
    protected $_bEnabled = false;

    /**
     * IS MODIFIED
     *
     * @return bool
     */
    public function isModified() {
        return $this->_bIsModified;
    }

    /**
     * IS ENABLED
     *
     * @return bool
     */
    public function isEnabled() {
        return $this->_bEnabled;
    }

    /**
     * IS ENABLED
     *
     * @return bool
     */
    public function isDisabled() {
        return !$this->_bEnabled;
    }

    /**
     * ENABLE
     *
     * @return $this
     */
    public function enable() {
        $this->_bEnabled = true;
        return $this;
    }

    /**
     * DISABLE
     *
     * @return $this
     */
    public function disable() {
        $this->_bEnabled = false;
        return $this;
    }

    /**
     * CALL FIELD
     *
     * @param mixed $mField
     * @return mixed
     */
    protected function _call($mField) {
        return is_callable($mField) ? call_user_func($mField, $this) : $mField;
    }

    /**
     * SET FIELD
     *
     * @param mixed $mField
     * @param mixed $mDatas
     * @return $this
     */
    protected function _set(&$mField, $mDatas) {
        $mField = $mDatas;
        $this->_bIsModified = true;
        return $this;
    }

###########################################################################################################
# PROPERTIES

    /** @var mixed */
    protected $_mOptionalField1 = null;
    protected $_mOptionalField2 = null;
    protected $_mOptionalField3 = null;
    protected $_mOptionalField4 = null;
    protected $_mOptionalField5 = null;
    protected $_mOptionalField6 = null;
    protected $_mOptionalField7 = null;
    protected $_mOptionalField8 = null;
    protected $_mOptionalField9 = null;
    protected $_mOptionalField10 = null;

###########################################################################################################
# ACCESSORS

    /**
     * GET OPTIONAL FIELD 1
     *
     * @return string
     */
    public function getOptionalField1() {
        return $this->_call($this->_mOptionalField1);
    }

    /**
     * SET OPTIONAL FIELD 1
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField1($mData) {
        return $this->_set($this->_mOptionalField1, $mData);
    }

    /**
     * GET OPTIONAL FIELD 2
     *
     * @return string
     */
    public function getOptionalField2() {
        return $this->_call($this->_mOptionalField2);
    }

    /**
     * SET OPTIONAL FIELD 2
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField2($mData) {
        return $this->_set($this->_mOptionalField2, $mData);
    }

    /**
     * GET OPTIONAL FIELD 3
     *
     * @return string
     */
    public function getOptionalField3() {
        return $this->_call($this->_mOptionalField3);
    }

    /**
     * SET OPTIONAL FIELD 3
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField3($mData) {
        return $this->_set($this->_mOptionalField3, $mData);
    }

    /**
     * GET OPTIONAL FIELD 4
     *
     * @return string
     */
    public function getOptionalField4() {
        return $this->_call($this->_mOptionalField4);
    }

    /**
     * SET OPTIONAL FIELD 4
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField4($mData) {
        return $this->_set($this->_mOptionalField4, $mData);
    }

    /**
     * GET OPTIONAL FIELD 5
     *
     * @return string
     */
    public function getOptionalField5() {
        return $this->_call($this->_mOptionalField5);
    }

    /**
     * SET OPTIONAL FIELD 5
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField5($mData) {
        return $this->_set($this->_mOptionalField5, $mData);
    }

    /**
     * GET OPTIONAL FIELD 6
     *
     * @return string
     */
    public function getOptionalField6() {
        return $this->_call($this->_mOptionalField6);
    }

    /**
     * SET OPTIONAL FIELD 6
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField6($mData) {
        return $this->_set($this->_mOptionalField6, $mData);
    }

    /**
     * GET OPTIONAL FIELD 7
     *
     * @return string
     */
    public function getOptionalField7() {
        return $this->_call($this->_mOptionalField7);
    }

    /**
     * SET OPTIONAL FIELD 7
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField7($mData) {
        return $this->_set($this->_mOptionalField7, $mData);
    }

    /**
     * GET OPTIONAL FIELD 8
     *
     * @return string
     */
    public function getOptionalField8() {
        return $this->_call($this->_mOptionalField8);
    }

    /**
     * SET OPTIONAL FIELD 8
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField8($mData) {
        return $this->_set($this->_mOptionalField8, $mData);
    }

    /**
     * GET OPTIONAL FIELD 9
     *
     * @return string
     */
    public function getOptionalField9() {
        return $this->_call($this->_mOptionalField9);
    }

    /**
     * SET OPTIONAL FIELD 9
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField9($mData) {
        return $this->_set($this->_mOptionalField9, $mData);
    }

    /**
     * GET OPTIONAL FIELD 10
     *
     * @return string
     */
    public function getOptionalField10() {
        return $this->_call($this->_mOptionalField10);
    }

    /**
     * SET OPTIONAL FIELD 10
     *
     * @param mixed|callable $mData
     * @return $this
     */
    public function setOptionalField10($mData) {
        return $this->_set($this->_mOptionalField10, $mData);
    }

}