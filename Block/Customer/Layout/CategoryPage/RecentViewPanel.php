<?php
namespace Block\Customer\Layout\CategoryPage;
\Mage::loadByClass('Block\Core\Template');
class RecentViewPanel extends \Block\Core\Template
{

    public function __construct() {
       parent::__construct();
       $this->setTemplate('.\View\customer\layout\categorypage\recentviewpanel.php');
    }

}
?>