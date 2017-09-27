<?php

namespace InWhiteBoxBundle\Form;

use InWhiteBoxBundle\Entity\Catalog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CatalogType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, ['label' => 'Название товара'])
            ->add('description', TextareaType::class, ['label' => 'Описание продукта'])
            ->add('pictureCollection', FileType::class, ['multiple' => true, 'label' => 'Изображение'])
            ->add('mainPicture', FileType::class, ['label' => 'Главная картинка'])
            ->add('price', NumberType::class, ['label' => 'Цена', 'attr' => ['min' => 1]]);
    }

    /**
     * {@inheritdoc}
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Catalog::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'inwhiteboxbundle_catalog';
    }


}
