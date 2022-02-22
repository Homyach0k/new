<?php
    
declare(strict_types=1);

namespace Controllers;

use Core\Controller;
use Core\View;

/**
 * Class CustomersController
 */
class CustomerController extends Controller
{
    /**
     * Customers index action that shows customer list
     * 
     * @return void
     */
    public function indexAction(): void
    {
        $this->forward('customer/list');
    }
    
        public function listAction(): void
    {
        $this->set('title', "Клієнти");

        $customers = $this->getModel('Customer')
                ->initCollection()
                ->getCollection()
                ->select();
        $this->set('customer', $customers);

        $this->renderLayout();
    }

}
?>