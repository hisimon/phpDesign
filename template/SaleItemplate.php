<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-22
 */
abstract class SaleItemTemplate{
    
    public $price = 0;
    
    public final function setPriceAdjustments(){
        $this->price += $this->taxAddtion();
        $this->price += $this->oversizedAddition();
        
    }
    
    protected function oversizedAddition(){
        return 0;
    }
    
    abstract protected function taxAddtion();
    
}