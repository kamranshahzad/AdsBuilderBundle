<?php



namespace Twist\AdsBuilderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * AdsBuilder controller.
 *
 * @Route("/ads")
 */

class IndexController extends Controller
{

    /**
     * @Route("/", name="ads_index")
     * @Template()
     */
    public function indexAction(Request $request){
    	echo " Hello How are u man hhhhhh? ";
    	return array();
    }


    /**
     * @Route("/add", name="ads_add")
     * @Template()
     */
    public function addAction(Request $request){

    	echo "Inside Add apps?";
    	return array();
    }




}
