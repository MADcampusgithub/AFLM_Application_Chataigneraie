<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerABYfLsh\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerABYfLsh/EntityManager_9a5be93.php';
require __DIR__.'/ContainerABYfLsh/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerABYfLsh/getValidator_ExpressionService.php';
require __DIR__.'/ContainerABYfLsh/getValidator_EmailService.php';
require __DIR__.'/ContainerABYfLsh/getTwig_Runtime_SerializerService.php';
require __DIR__.'/ContainerABYfLsh/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerABYfLsh/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerABYfLsh/getSession_FactoryService.php';
require __DIR__.'/ContainerABYfLsh/getServicesResetterService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerABYfLsh/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerABYfLsh/getSecrets_VaultService.php';
require __DIR__.'/ContainerABYfLsh/getRouting_LoaderService.php';
require __DIR__.'/ContainerABYfLsh/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerABYfLsh/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerABYfLsh/getErrorControllerService.php';
require __DIR__.'/ContainerABYfLsh/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerABYfLsh/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerABYfLsh/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerABYfLsh/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerABYfLsh/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerABYfLsh/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerABYfLsh/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerABYfLsh/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_Security_Voter_Security_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerABYfLsh/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerABYfLsh/getContainer_GetenvService.php';
require __DIR__.'/ContainerABYfLsh/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerABYfLsh/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerABYfLsh/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerABYfLsh/getCache_SystemClearerService.php';
require __DIR__.'/ContainerABYfLsh/getCache_SystemService.php';
require __DIR__.'/ContainerABYfLsh/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerABYfLsh/getCache_AppClearerService.php';
require __DIR__.'/ContainerABYfLsh/getCache_AppService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_SwaggerUi_ActionService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Swagger_Action_UiService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Openapi_OptionsService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Openapi_FactoryService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Listener_View_WriteService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Listener_View_ValidateService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Listener_View_SerializeService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Listener_View_RespondService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Listener_Exception_ValidationService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Listener_ExceptionService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Jsonld_Action_ContextService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_QueryExtension_OrderService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_QueryExtension_FilterService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Doctrine_Orm_DataPersisterService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Action_PlaceholderService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Action_NotFoundService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Action_ExceptionService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Action_EntrypointService.php';
require __DIR__.'/ContainerABYfLsh/getApiPlatform_Action_DocumentationService.php';
require __DIR__.'/ContainerABYfLsh/getTemplateControllerService.php';
require __DIR__.'/ContainerABYfLsh/getRedirectControllerService.php';
require __DIR__.'/ContainerABYfLsh/getUtilisateurRepositoryService.php';
require __DIR__.'/ContainerABYfLsh/getSpecialiteRepositoryService.php';
require __DIR__.'/ContainerABYfLsh/getEntrepriseRepositoryService.php';
require __DIR__.'/ContainerABYfLsh/get_ServiceLocator_ZxMugcLService.php';
require __DIR__.'/ContainerABYfLsh/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerABYfLsh/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerABYfLsh/get_Container_Private_TwigService.php';
require __DIR__.'/ContainerABYfLsh/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerABYfLsh/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerABYfLsh/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerABYfLsh/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\ApiPlatformBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer';
$classes[] = 'ApiPlatform\Core\OpenApi\Serializer\OpenApiNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer';
$classes[] = 'ApiPlatform\Core\Problem\Serializer\ErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer';
$classes[] = 'ApiPlatform\Core\Serializer\ItemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'ApiPlatform\Core\JsonLd\Serializer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'ApiPlatform\Core\Serializer\JsonEncoder';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'App\Repository\EntrepriseRepository';
$classes[] = 'App\Repository\SpecialiteRepository';
$classes[] = 'App\Repository\UtilisateurRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'ApiPlatform\Core\Documentation\Action\DocumentationAction';
$classes[] = 'ApiPlatform\Core\Action\EntrypointAction';
$classes[] = 'ApiPlatform\Core\Action\ExceptionAction';
$classes[] = 'ApiPlatform\Core\Action\NotFoundAction';
$classes[] = 'ApiPlatform\Core\Action\PlaceholderAction';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension';
$classes[] = 'ApiPlatform\Core\DataProvider\Pagination';
$classes[] = 'ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener';
$classes[] = 'ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Core\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener';
$classes[] = 'ApiPlatform\Core\Identifier\IdentifierConverter';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer';
$classes[] = 'ApiPlatform\Core\Api\CachedIdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Api\IdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver';
$classes[] = 'ApiPlatform\Core\JsonSchema\TypeFactory';
$classes[] = 'ApiPlatform\Core\JsonLd\Action\ContextAction';
$classes[] = 'ApiPlatform\Core\JsonLd\ContextBuilder';
$classes[] = 'ApiPlatform\Core\EventListener\ExceptionListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener';
$classes[] = 'ApiPlatform\Core\EventListener\AddFormatListener';
$classes[] = 'Negotiation\Negotiator';
$classes[] = 'ApiPlatform\Core\EventListener\DeserializeListener';
$classes[] = 'ApiPlatform\Core\EventListener\ReadListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Core\EventListener\RespondListener';
$classes[] = 'ApiPlatform\Core\EventListener\SerializeListener';
$classes[] = 'ApiPlatform\Core\Validator\EventListener\ValidateListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Validator';
$classes[] = 'ApiPlatform\Core\EventListener\QueryParameterValidateListener';
$classes[] = 'ApiPlatform\Core\Filter\QueryParameterValidator';
$classes[] = 'ApiPlatform\Core\EventListener\WriteListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister';
$classes[] = 'ApiPlatform\Core\DataPersister\ChainDataPersister';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\XmlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\YamlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\DefaultPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaFormat';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLengthRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaOneOfRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRegexRestriction';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\FormatsResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\OpenApi\Factory\OpenApiFactory';
$classes[] = 'ApiPlatform\Core\DataProvider\PaginationOptions';
$classes[] = 'ApiPlatform\Core\OpenApi\Options';
$classes[] = 'ApiPlatform\Core\PathResolver\CustomOperationPathResolver';
$classes[] = 'ApiPlatform\Core\PathResolver\OperationPathResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver';
$classes[] = 'ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator';
$classes[] = 'ApiPlatform\Core\Api\ResourceClassResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\Router';
$classes[] = 'ApiPlatform\Core\Security\EventListener\DenyAccessListener';
$classes[] = 'ApiPlatform\Core\Security\ResourceAccessChecker';
$classes[] = 'ApiPlatform\Core\Serializer\SerializerFilterContextBuilder';
$classes[] = 'ApiPlatform\Core\Serializer\SerializerContextBuilder';
$classes[] = 'ApiPlatform\Core\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiAction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiContext';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

$preloaded = Preloader::preload($classes);
