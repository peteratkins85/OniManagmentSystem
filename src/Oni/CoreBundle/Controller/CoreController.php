<?php

namespace Oni\CoreBundle\Controller;

use Oni\CoreBundle\Entity\Repository\LanguagesRepository;
use Oni\CoreBundle\Entity\TranslatorAwareInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Oni\ProductManagerBundle\Entity\Products;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Form\FormInterface;


class CoreController extends Controller implements TranslatorAwareInterface
{

    /** @var Container */
    protected $container;

    /**@var Translator */
    protected $translator;

    /** @var string */
    protected $travelPortTheme = 'default';



    /**
     *
     * Get current language
     *
     * @return integer
     *
     *
     */
     public function getLanguage(){

        return $this->get('oni_get_locale');

    }

    /**
     *
     * Set travel connect theme
     *
     * @param string $theme
     *
     */
    public function setTravelPortTheme($theme){

        $this->travelPortTheme = $theme;

    }

    /**
     *
     * Add form errors to flashbag
     *
     * @param FormInterface $form
     *
     */
    public function flashErrors($form){

        foreach($form->getErrors() as $error){
            $this->addFlash(
                'error',
                $error->getMessage()
            );
        }

        foreach ($form->all() as $child) {
            $this->flashErrors($child);
        }

        return;

    }

    /***
     *
     *
     * @return LanguagesRepository
     *
     */
    public function getLanguageRepository(){

        return $this->get('oni_language_repository');

    }



    /**
     * CATEGORY
     *
     * Method for getting ProductCategory Repository
     *
     * @return \Oni\ProductManagerBundle\Entity\Repository\ProductCategoryRepository
     */
    public function getProductCategoryRepository(){

        if (!$this->container->has('oni_product_categories_repository')) {
            throw new \LogicException('The OniProductManagerBundle is not registered in your application.');
        }

        return $this->container->get('oni_product_categories_repository');

    }

    /**
     * Product
     *
     * Method for getting Product Repository
     *
     * @return \Oni\ProductManagerBundle\Entity\Repository\ProductRepository
     */
    public function getProductRepository(){

        if (!$this->container->has('oni_products_repository')) {
            throw new \LogicException('The OniProductManagerBundle is not registered in your application.');
        }

        return $this->container->get('oni_products_repository');

    }

    /**
     * User
     *
     * Method for getting User Entity Repository
     *
     * @return object
     */
    public function getUserRepository(){

        if (!$this->container->has('oni_user_repository')) {
            throw new \LogicException('The OniUserManagerBundle is not registered in your application.');
        }

        return $this->container->get('oni_user_repository');

    }


    /**
     *
     * Set Translator
     *
     * @param \Symfony\Component\Translation\TranslatorInterface $translator
     *
     * @return mixed
     */
    public function setTranslator( TranslatorInterface $translator ) {
        $this->translator = $translator;
    }
}
