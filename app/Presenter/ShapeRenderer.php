<?php
namespace App\Presenter;

use App\Contracts\ManageRendererInterface;
/**
 * Description of ShapeRenderer
 */
class ShapeRenderer {
    
    protected $shapes;
    
    public function __construct(ManageRendererInterface $shapes) 
    {
        $this->shapes = $shapes;
    }
    
    public function render()
    {
        print_r( $this->shapes->renderPrepare() );
    }
    
    
    
}
