<?php
namespace Coercive\Shop\Cart;

use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Gift extends Entity {

###########################################################################################################
# BIND ITEMS

    /** @var User */
    private $_oUser = null;

    /**
     * SINGLETON USER
     *
     * @return User
     */
    public function User() {
        return null === $this->_oUser ? $this->_oUser = new User : $this->_oUser;
    }

###########################################################################################################
# PROPERTIES

    /** @var string|callable */
    private $_sRef = '';

    /** @var string|callable */
    private $_sFrom = '';

    /** @var string|callable */
    private $_sMessage = '';

###########################################################################################################
# ACCESSORS

    /**
     * GET REF
     *
     * @return string
     */
    public function getRef() {
        return $this->_call($this->_sRef);
    }

    /**
     * SET REF
     *
     * @param string|callable $sRef
     * @return $this
     */
    public function setRef($sRef) {
        return $this->_set($this->_sRef, $sRef);
    }

    /**
     * GET FROM
     *
     * @return string
     */
    public function getFrom() {
        return $this->_call($this->_sFrom);
    }

    /**
     * SET FROM
     *
     * @param string|callable $sFrom
     * @return $this
     */
    public function setFrom($sFrom) {
        return $this->_set($this->_sFrom, $sFrom);
    }

    /**
     * GET MESSAGE
     *
     * @return string
     */
    public function getMessage() {
        return $this->_call($this->_sMessage);
    }

    /**
     * SET MESSAGE
     *
     * @param string|callable $sMessage
     * @return $this
     */
    public function setMessage($sMessage) {
        return $this->_set($this->_sMessage, $sMessage);
    }

}