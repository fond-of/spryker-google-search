<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Form;

use FondOfSpryker\Shared\GoogleCustomSearch\GoogleCustomSearchConstants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class GoogleCustomSearchForm extends AbstractType
{
    const FORM_ID = 'search_mini_form';
    const FIELD_SEARCH = 'q';
    const FIELD_SUBMIT = 'submit';
    const BLOCK_PREFIX = false;

    /**
     * @return string
     */
    public function getBlockPrefix(): string
    {
        return self::BLOCK_PREFIX;
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
            ->setAction(GoogleCustomSearchConstants::ROUTE_SEARCH_URL_VARIABLE)
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
