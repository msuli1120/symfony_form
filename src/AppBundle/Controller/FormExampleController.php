<?php
	namespace AppBundle\Controller;

	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	class FormExampleController extends Controller
	{
		/**
		 * @Route("/", name="form_example")
		 */
		public function formExampleAction()
		{
			return $this->render(':form-example:index.html.twig');
		}
	}
