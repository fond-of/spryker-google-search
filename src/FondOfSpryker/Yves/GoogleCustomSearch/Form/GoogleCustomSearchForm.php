<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @method \FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchConfig getConfig()
 */
class GoogleCustomSearchForm extends AbstractType
{
    public const FORM_ID = 'search_mini_form';
    public const FIELD_SEARCH = 'q';
    public const FIELD_SUBMIT = 'submit';
    public const FORM_TYPE_NAME = 'googleCustomSearch';

    /**
     * @return string
     */
    public function getBlockPrefix(): string
    {
        return static::FORM_TYPE_NAME;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->setAction('search')
            ->setMethod('GET')
            ->add(self::FIELD_SEARCH, SearchType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-text required-entry form-control',
                    'placeholder' => 'google_custom_search.search',
                ],
            ]);
    }

    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     *
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'attr' => [
                'id' => self::FORM_ID,
            ],
            'csrf_protection' => false,
        ]);
    }
}
