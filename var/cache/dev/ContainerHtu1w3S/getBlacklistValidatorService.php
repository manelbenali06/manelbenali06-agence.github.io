<?php

namespace ContainerHtu1w3S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlacklistValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Rollerworks\Component\PasswordStrength\Validator\Constraints\BlacklistValidator' shared service.
     *
     * @return \Rollerworks\Component\PasswordStrength\Validator\Constraints\BlacklistValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'rollerworks'.\DIRECTORY_SEPARATOR.'password-strength-validator'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'BlacklistValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'rollerworks'.\DIRECTORY_SEPARATOR.'password-strength-validator'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Blacklist'.\DIRECTORY_SEPARATOR.'BlacklistProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'rollerworks'.\DIRECTORY_SEPARATOR.'password-strength-validator'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Blacklist'.\DIRECTORY_SEPARATOR.'NoopProvider.php';

        return $container->privates['Rollerworks\\Component\\PasswordStrength\\Validator\\Constraints\\BlacklistValidator'] = new \Rollerworks\Component\PasswordStrength\Validator\Constraints\BlacklistValidator(new \Rollerworks\Component\PasswordStrength\Blacklist\NoopProvider());
    }
}
