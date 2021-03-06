<?php 

/* Contemplate cached template 'base' */
if (!class_exists('Contemplate_base_Cached'))
{
final class Contemplate_base_Cached extends ContemplateTemplate
{    
    /* constructor */
    public function __construct($id=null)
    {
        /* initialize internal vars */
        $this->_renderer = null;
        $this->_extends = null;
        $this->_blocks = null;
        $this->id = null; 
        $this->id = $id;
        
        /* extend tpl assign code starts here */
        
        /* extend tpl assign code ends here */
    }    
    
    /* tpl-defined blocks render code starts here */
    
    
    /* tpl block render method for block 'Block3' */
    private function _blockfn_Block3(&$data, $__i__) 
    { 
        
        $__p__ = '';
        
        $__p__ .= 'Base template Block3';
        return $__p__;
        
    }
    
    
    /* tpl block render method for block 'Block2' */
    private function _blockfn_Block2(&$data, $__i__) 
    { 
        
        $__p__ = '';
        
        $__p__ .= 'Base template Block2';
        return $__p__;
        
    }
    
    
    /* tpl block render method for block 'Block12' */
    private function _blockfn_Block12(&$data, $__i__) 
    { 
        
        $__p__ = '';
        
        $__p__ .= 'Base template nested Block12';
        return $__p__;
        
    }
    
    
    /* tpl block render method for block 'Block11' */
    private function _blockfn_Block11(&$data, $__i__) 
    { 
        
        $__p__ = '';
        
        $__p__ .= 'Base template nested Block11';
        return $__p__;
        
    }
    
    
    /* tpl block render method for block 'Block1' */
    private function _blockfn_Block1(&$data, $__i__) 
    { 
        
        $__p__ = '';
        
        $__p__ .= '' . "\n" . 'Base template Block1' . "\n" . '<br /><br />' . "\n" . '' .  $__i__->renderBlock('Block11', $data);
        $__p__ .= '' . "\n" . '<br /><br />' . "\n" . '' .  $__i__->renderBlock('Block12', $data);
        $__p__ .= '' . "\n" . '<br /><br />' . "\n" . '';
        return $__p__;
        
    }
    
    /* tpl-defined blocks render code ends here */
    
    /* tpl renderBlock method */
    public function renderBlock($block, &$data, $__i__=null)
    {
        if ( !$__i__ ) $__i__ = $this;
        $method = '_blockfn_' . $block;
        if ( method_exists($this, $method) ) return $this->{$method}($data, $__i__);
        elseif ( $this->_extends ) return $this->_extends->renderBlock($block, $data, $__i__);
        return '';
    }
    
    /* tpl render method */
    public function render(&$data, $__i__=null)
    {
        if ( !$__i__ ) $__i__ = $this;
        $__p__ = '';
        if ( $this->_extends )
        {
            $__p__ = $this->_extends->render($data, $__i__);
        }
        else
        {
            /* tpl main render code starts here */
            
            $__p__ .= '<!-- this is the base template -->' . "\n" . '' . "\n" . '<strong>This is the base template</strong>' . "\n" . '' . "\n" . '' . "\n" . '<br /><br /><br /><br />' . "\n" . '<strong>This is Block1</strong><br />' . "\n" . '' .  $__i__->renderBlock('Block1', $data);
            $__p__ .= '' . "\n" . '' . "\n" . '<br /><br /><br /><br />' . "\n" . '<strong>This is Block2</strong><br />' . "\n" . '' .  $__i__->renderBlock('Block2', $data);
            $__p__ .= '' . "\n" . '' . "\n" . '<br /><br /><br /><br />' . "\n" . '<strong>This is Block3</strong><br />' . "\n" . '' .  $__i__->renderBlock('Block3', $data);
            $__p__ .= '' . "\n" . '' . "\n" . '' . "\n" . '<br /><br /><br /><br />' . "\n" . '<strong>This is Block2 Again</strong><br />' . "\n" . '' .  $__i__->renderBlock('Block2', $data);
            $__p__ .= '' . "\n" . '';
            
            /* tpl main render code ends here */
        }
        return $__p__;
    }
}
}
