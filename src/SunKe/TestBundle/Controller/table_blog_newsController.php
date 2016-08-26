<?php

namespace SunKe\TestBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SunKe\TestBundle\Entity\table_blog_news;
use SunKe\TestBundle\Form\table_blog_newsType;

/**
 * table_blog_news controller.
 *
 * @Route("/table_blog_news")
 */
class table_blog_newsController extends Controller
{
    /**
     * Lists all table_blog_news entities.
     *
     * @Route("/", name="table_blog_news_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $table_blog_news = $em->getRepository('SkTestBundle:table_blog_news')->findAll();
        return $this->render('table_blog_news/index.html.twig', array(
            'table_blog_news' => $table_blog_news,
        ));
    }

    /**
     * Creates a new table_blog_news entity.
     *
     * @Route("/new", name="table_blog_news_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
//        $table_blog_news = new table_blog_news();
//        $table_blog_news->setTitle("title".rand());
//        $form = $this->createForm('SunKe\TestBundle\Form\table_blog_newsType', $table_blog_news);
//        $form->handleRequest($request);

        $table_blog_news = new table_blog_news();
        $table_blog_news->setTitle("write sk title");

        $form = $this->createFormBuilder($table_blog_news)
            ->add('title', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create title'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            //$em->persist($table_blog_news); #同样可行
            $em->flush();

            return $this->redirectToRoute('table_blog_news_show', array('id' => $table_blog_news->getId()));
        }

        return $this->render('table_blog_news/new.html.twig', array(
            'table_blog_news' => $table_blog_news,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a table_blog_news entity.
     *
     * @Route("/{id}", name="table_blog_news_show")
     * @Method("GET")
     */
    public function showAction(table_blog_news $table_blog_news)
    {
        $deleteForm = $this->createDeleteForm($table_blog_news);

        return $this->render('table_blog_news/show.html.twig', array(
            'table_blog_news' => $table_blog_news,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing table_blog_news entity.
     *
     * @Route("/{id}/edit", name="table_blog_news_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, table_blog_news $table_blog_news)
    {
        $deleteForm = $this->createDeleteForm($table_blog_news);
        $editForm = $this->createForm('SunKe\TestBundle\Form\table_blog_newsType', $table_blog_news);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($table_blog_news);
            $em->flush();

            return $this->redirectToRoute('table_blog_news_edit', array('id' => $table_blog_news->getId()));
        }

        return $this->render('table_blog_news/edit.html.twig', array(
            'table_blog_news' => $table_blog_news,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a table_blog_news entity.
     *
     * @Route("/{id}", name="table_blog_news_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, table_blog_news $table_blog_news)
    {
        $form = $this->createDeleteForm($table_blog_news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($table_blog_news);
            $em->flush();
        }

        return $this->redirectToRoute('table_blog_news_index');
    }

    /**
     * Creates a form to delete a table_blog_news entity.
     *
     * @param table_blog_news $table_blog_news The table_blog_news entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(table_blog_news $table_blog_news)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('table_blog_news_delete', array('id' => $table_blog_news->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
