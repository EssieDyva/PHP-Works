<?php
class Calcoli {
    private $_op1;
    private $_op2;

    public function __construct($op1, $op2) {
        $this->_op1 = $op1;
        $this->_op2 = $op2;
    }
    public function massimo() {
        if ($this->_op1 > $this->_op2) {
            return $this->_op1;
        } else {
            return $this->_op2;
        }
    }
    public function minimo() {
        if ($this->_op1 < $this->_op2) {
            return $this->_op1;
        } else {
            return $this->_op2;
        }
    }
    public function update($op1, $op2) {
        $this->_op1 = $op1;
        $this->_op2 = $op2;
    }
}