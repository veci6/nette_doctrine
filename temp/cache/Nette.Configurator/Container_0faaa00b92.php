<?php
// source: C:\xampp\htdocs\nette_doctrine\app/config/config.neon 
// source: C:\xampp\htdocs\nette_doctrine\app/config/config.local.neon 

class Container_0faaa00b92 extends Nette\DI\Container
{
	protected $meta = array(
		'types' => array(
			'Nette\Object' => array(
				array(
					'application.application',
					'application.linkGenerator',
					'http.requestFactory',
					'http.request',
					'http.response',
					'http.context',
					'security.user',
					'session.session',
					'doctrine.default.proxyAutoloader',
					'doctrine.repositoryFactory',
					'doctrine.cacheCleaner',
					'translation.catalogueCompiler',
					'translation.panel',
					'translation.userLocaleResolver.param',
					'translation.userLocaleResolver.acceptHeader',
					'translation.userLocaleResolver.session',
					'translation.helpers',
					'translation.fallbackResolver',
					'translation.catalogueFactory',
					'translation.extractor.latte',
					'translation.loader',
					'101_App_Forms_SignFormFactory',
					'102_App_Model_Facades_UserFacade',
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'container',
				),
			),
			'Nette\Application\Application' => array(1 => array('application.application')),
			'Nette\Application\IPresenterFactory' => array(
				1 => array('application.presenterFactory'),
			),
			'Nette\Application\LinkGenerator' => array(1 => array('application.linkGenerator')),
			'Nette\Caching\Storages\IJournal' => array(1 => array('cache.journal')),
			'Nette\Caching\IStorage' => array(1 => array('cache.storage')),
			'Nette\Http\RequestFactory' => array(1 => array('http.requestFactory')),
			'Nette\Http\IRequest' => array(1 => array('http.request')),
			'Nette\Http\Request' => array(1 => array('http.request')),
			'Nette\Http\IResponse' => array(1 => array('http.response')),
			'Nette\Http\Response' => array(1 => array('http.response')),
			'Nette\Http\Context' => array(1 => array('http.context')),
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => array(1 => array('latte.latteFactory')),
			'Nette\Application\UI\ITemplateFactory' => array(1 => array('latte.templateFactory')),
			'Latte\Object' => array(array('nette.latte')),
			'Latte\Engine' => array(array('nette.latte')),
			'Nette\Mail\IMailer' => array(1 => array('mail.mailer')),
			'Nette\Application\IRouter' => array(1 => array('routing.router')),
			'Nette\Security\IUserStorage' => array(1 => array('security.userStorage')),
			'Nette\Security\User' => array(1 => array('security.user')),
			'Nette\Http\Session' => array(1 => array('session.session')),
			'Tracy\ILogger' => array(1 => array('tracy.logger')),
			'Tracy\BlueScreen' => array(1 => array('tracy.blueScreen')),
			'Tracy\Bar' => array(1 => array('tracy.bar')),
			'IteratorAggregate' => array(1 => array('console.helperSet')),
			'Traversable' => array(1 => array('console.helperSet')),
			'Symfony\Component\Console\Helper\HelperSet' => array(1 => array('console.helperSet')),
			'Symfony\Component\Console\Application' => array(1 => array('console.application')),
			'Kdyby\Console\Application' => array(1 => array('console.application')),
			'Symfony\Component\Console\Helper\Helper' => array(
				1 => array(
					'console.dicHelper',
					'doctrine.helper.entityManager',
					'doctrine.helper.connection',
				),
			),
			'Symfony\Component\Console\Helper\HelperInterface' => array(
				1 => array(
					'console.dicHelper',
					'doctrine.helper.entityManager',
					'doctrine.helper.connection',
				),
			),
			'Kdyby\Console\ContainerHelper' => array(1 => array('console.dicHelper')),
			'Kdyby\Events\EventManager' => array(
				1 => array('events.manager'),
				0 => array('doctrine.default.evm'),
			),
			'Doctrine\Common\EventManager' => array(
				1 => array('events.manager'),
				0 => array('doctrine.default.evm'),
			),
			'Kdyby\Events\LazyEventManager' => array(1 => array('events.manager')),
			'Doctrine\Common\Annotations\Reader' => array(
				array('annotations.reflectionReader'),
				array('annotations.reader'),
			),
			'Doctrine\Common\Annotations\AnnotationReader' => array(array('annotations.reflectionReader')),
			'Doctrine\Common\Cache\Cache' => array(
				array(
					'annotations.cache.annotations',
					'doctrine.cache.default.metadata',
					'doctrine.cache.default.query',
					'doctrine.cache.default.ormResult',
					'doctrine.cache.default.hydration',
					'doctrine.cache.default.dbalResult',
				),
			),
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver' => array(
				array(
					'doctrine.default.metadataDriver',
					'doctrine.default.driver.App.annotationsImpl',
					'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl',
				),
			),
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain' => array(
				array('doctrine.default.metadataDriver'),
			),
			'Doctrine\ORM\Configuration' => array(
				array('doctrine.default.ormConfiguration'),
			),
			'Doctrine\DBAL\Configuration' => array(
				array(
					'doctrine.default.ormConfiguration',
					'doctrine.default.dbalConfiguration',
				),
			),
			'Kdyby\Doctrine\Configuration' => array(
				array('doctrine.default.ormConfiguration'),
			),
			'Kdyby\Events\Subscriber' => array(
				array('doctrine.default.proxyAutoloader'),
			),
			'Doctrine\Common\EventSubscriber' => array(
				array('doctrine.default.proxyAutoloader'),
			),
			'Kdyby\Doctrine\Proxy\ProxyAutoloader' => array(
				array('doctrine.default.proxyAutoloader'),
			),
			'Kdyby\Events\NamespacedEventManager' => array(array('doctrine.default.evm')),
			'Doctrine\ORM\EntityManager' => array(
				1 => array('doctrine.default.entityManager'),
			),
			'Doctrine\Common\Persistence\ObjectManager' => array(
				1 => array('doctrine.default.entityManager'),
			),
			'Doctrine\ORM\EntityManagerInterface' => array(
				1 => array('doctrine.default.entityManager'),
			),
			'Kdyby\Doctrine\EntityManager' => array(
				1 => array('doctrine.default.entityManager'),
			),
			'Doctrine\DBAL\Connection' => array(
				1 => array('doctrine.default.connection'),
			),
			'Doctrine\DBAL\Driver\Connection' => array(
				1 => array('doctrine.default.connection'),
			),
			'Kdyby\Doctrine\Connection' => array(
				1 => array('doctrine.default.connection'),
			),
			'Kdyby\Doctrine\EntityRepository' => array(1 => array('doctrine.dao')),
			'Doctrine\ORM\EntityRepository' => array(1 => array('doctrine.dao')),
			'Kdyby\Persistence\Queryable' => array(1 => array('doctrine.dao')),
			'Kdyby\Persistence\QueryExecutor' => array(1 => array('doctrine.dao')),
			'Doctrine\Common\Persistence\ObjectRepository' => array(1 => array('doctrine.dao')),
			'Doctrine\Common\Collections\Selectable' => array(1 => array('doctrine.dao')),
			'Kdyby\Persistence\ObjectDao' => array(1 => array('doctrine.dao')),
			'Kdyby\Doctrine\EntityDao' => array(1 => array('doctrine.dao')),
			'Kdyby\Doctrine\EntityDaoFactory' => array(1 => array('doctrine.daoFactory')),
			'Doctrine\ORM\Repository\RepositoryFactory' => array(array('doctrine.repositoryFactory')),
			'Kdyby\Doctrine\RepositoryFactory' => array(array('doctrine.repositoryFactory')),
			'Doctrine\ORM\Tools\SchemaValidator' => array(1 => array('doctrine.schemaValidator')),
			'Doctrine\ORM\Tools\SchemaTool' => array(1 => array('doctrine.schemaTool')),
			'Doctrine\DBAL\Schema\AbstractSchemaManager' => array(1 => array('doctrine.schemaManager')),
			'Kdyby\Doctrine\Tools\CacheCleaner' => array(1 => array('doctrine.cacheCleaner')),
			'Symfony\Component\Console\Command\Command' => array(
				1 => array(
					'doctrine.cli.0',
					'doctrine.cli.1',
					'doctrine.cli.2',
					'doctrine.cli.3',
					'doctrine.cli.4',
					'doctrine.cli.5',
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
					'doctrine.cli.9',
					'doctrine.cli.10',
					'doctrine.cli.11',
					'translation.console.extract',
				),
			),
			'Doctrine\DBAL\Tools\Console\Command\ImportCommand' => array(1 => array('doctrine.cli.0')),
			'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand' => array(1 => array('doctrine.cli.1')),
			'Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand' => array(1 => array('doctrine.cli.2')),
			'Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand' => array(1 => array('doctrine.cli.3')),
			'Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand' => array(1 => array('doctrine.cli.4')),
			'Kdyby\Doctrine\Console\ConvertMappingCommand' => array(1 => array('doctrine.cli.4')),
			'Doctrine\ORM\Tools\Console\Command\GenerateEntitiesCommand' => array(1 => array('doctrine.cli.5')),
			'Kdyby\Doctrine\Console\GenerateEntitiesCommand' => array(1 => array('doctrine.cli.5')),
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand' => array(1 => array('doctrine.cli.6')),
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\AbstractCommand' => array(
				1 => array(
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
				),
			),
			'Kdyby\Doctrine\Console\SchemaCreateCommand' => array(1 => array('doctrine.cli.6')),
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand' => array(1 => array('doctrine.cli.7')),
			'Kdyby\Doctrine\Console\SchemaUpdateCommand' => array(1 => array('doctrine.cli.7')),
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand' => array(1 => array('doctrine.cli.8')),
			'Kdyby\Doctrine\Console\SchemaDropCommand' => array(1 => array('doctrine.cli.8')),
			'Doctrine\ORM\Tools\Console\Command\GenerateProxiesCommand' => array(1 => array('doctrine.cli.9')),
			'Kdyby\Doctrine\Console\GenerateProxiesCommand' => array(1 => array('doctrine.cli.9')),
			'Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand' => array(1 => array('doctrine.cli.10')),
			'Kdyby\Doctrine\Console\ValidateSchemaCommand' => array(1 => array('doctrine.cli.10')),
			'Doctrine\ORM\Tools\Console\Command\InfoCommand' => array(1 => array('doctrine.cli.11')),
			'Kdyby\Doctrine\Console\InfoCommand' => array(1 => array('doctrine.cli.11')),
			'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper' => array(
				1 => array('doctrine.helper.entityManager'),
			),
			'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper' => array(
				1 => array('doctrine.helper.connection'),
			),
			'Doctrine\Common\Persistence\AbstractManagerRegistry' => array(1 => array('doctrine.registry')),
			'Doctrine\Common\Persistence\ConnectionRegistry' => array(1 => array('doctrine.registry')),
			'Doctrine\Common\Persistence\ManagerRegistry' => array(1 => array('doctrine.registry')),
			'Kdyby\Doctrine\Registry' => array(1 => array('doctrine.registry')),
			'Symfony\Component\Translation\Translator' => array(1 => array('translation.default')),
			'Symfony\Component\Translation\TranslatorBagInterface' => array(1 => array('translation.default')),
			'Symfony\Component\Translation\TranslatorInterface' => array(1 => array('translation.default')),
			'Kdyby\Translation\ITranslator' => array(1 => array('translation.default')),
			'Nette\Localization\ITranslator' => array(1 => array('translation.default')),
			'Kdyby\Translation\Translator' => array(1 => array('translation.default')),
			'Kdyby\Translation\CatalogueCompiler' => array(
				1 => array('translation.catalogueCompiler'),
			),
			'Tracy\IBarPanel' => array(1 => array('translation.panel')),
			'Kdyby\Translation\Diagnostics\Panel' => array(1 => array('translation.panel')),
			'Kdyby\Translation\IUserLocaleResolver' => array(
				array('translation.userLocaleResolver.param'),
				array(
					'translation.userLocaleResolver.acceptHeader',
					'translation.userLocaleResolver.session',
					'translation.userLocaleResolver',
				),
			),
			'Kdyby\Translation\LocaleResolver\LocaleParamResolver' => array(
				array('translation.userLocaleResolver.param'),
			),
			'Kdyby\Translation\LocaleResolver\AcceptHeaderResolver' => array(
				1 => array(
					'translation.userLocaleResolver.acceptHeader',
				),
			),
			'Kdyby\Translation\LocaleResolver\SessionResolver' => array(
				1 => array(
					'translation.userLocaleResolver.session',
				),
			),
			'Kdyby\Translation\TemplateHelpers' => array(1 => array('translation.helpers')),
			'Kdyby\Translation\FallbackResolver' => array(
				1 => array('translation.fallbackResolver'),
			),
			'Kdyby\Translation\CatalogueFactory' => array(
				1 => array('translation.catalogueFactory'),
			),
			'Symfony\Component\Translation\MessageSelector' => array(1 => array('translation.selector')),
			'Symfony\Component\Translation\Extractor\ExtractorInterface' => array(
				1 => array('translation.extractor'),
				0 => array('translation.extractor.latte'),
			),
			'Symfony\Component\Translation\Extractor\ChainExtractor' => array(1 => array('translation.extractor')),
			'Kdyby\Translation\Extractors\LatteExtractor' => array(array('translation.extractor.latte')),
			'Symfony\Component\Translation\Writer\TranslationWriter' => array(1 => array('translation.writer')),
			'Symfony\Component\Translation\Dumper\FileDumper' => array(
				array(
					'translation.dumper.php',
					'translation.dumper.xliff',
					'translation.dumper.po',
					'translation.dumper.mo',
					'translation.dumper.yml',
					'translation.dumper.neon',
					'translation.dumper.qt',
					'translation.dumper.csv',
					'translation.dumper.ini',
					'translation.dumper.res',
				),
			),
			'Symfony\Component\Translation\Dumper\DumperInterface' => array(
				array(
					'translation.dumper.php',
					'translation.dumper.xliff',
					'translation.dumper.po',
					'translation.dumper.mo',
					'translation.dumper.yml',
					'translation.dumper.neon',
					'translation.dumper.qt',
					'translation.dumper.csv',
					'translation.dumper.ini',
					'translation.dumper.res',
				),
			),
			'Symfony\Component\Translation\Dumper\PhpFileDumper' => array(array('translation.dumper.php')),
			'Symfony\Component\Translation\Dumper\XliffFileDumper' => array(array('translation.dumper.xliff')),
			'Symfony\Component\Translation\Dumper\PoFileDumper' => array(array('translation.dumper.po')),
			'Symfony\Component\Translation\Dumper\MoFileDumper' => array(array('translation.dumper.mo')),
			'Symfony\Component\Translation\Dumper\YamlFileDumper' => array(array('translation.dumper.yml')),
			'Kdyby\Translation\Dumper\NeonFileDumper' => array(array('translation.dumper.neon')),
			'Symfony\Component\Translation\Dumper\QtFileDumper' => array(array('translation.dumper.qt')),
			'Symfony\Component\Translation\Dumper\CsvFileDumper' => array(array('translation.dumper.csv')),
			'Symfony\Component\Translation\Dumper\IniFileDumper' => array(array('translation.dumper.ini')),
			'Symfony\Component\Translation\Dumper\IcuResFileDumper' => array(array('translation.dumper.res')),
			'Kdyby\Translation\IResourceLoader' => array(1 => array('translation.loader')),
			'Kdyby\Translation\TranslationLoader' => array(1 => array('translation.loader')),
			'Symfony\Component\Translation\Loader\ArrayLoader' => array(
				array(
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.csv',
					'translation.loader.ini',
					'translation.loader.neon',
				),
			),
			'Symfony\Component\Translation\Loader\LoaderInterface' => array(
				array(
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.xlf',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.ts',
					'translation.loader.csv',
					'translation.loader.res',
					'translation.loader.dat',
					'translation.loader.ini',
					'translation.loader.neon',
				),
			),
			'Symfony\Component\Translation\Loader\PhpFileLoader' => array(array('translation.loader.php')),
			'Symfony\Component\Translation\Loader\YamlFileLoader' => array(array('translation.loader.yml')),
			'Symfony\Component\Translation\Loader\XliffFileLoader' => array(array('translation.loader.xlf')),
			'Symfony\Component\Translation\Loader\PoFileLoader' => array(array('translation.loader.po')),
			'Symfony\Component\Translation\Loader\MoFileLoader' => array(array('translation.loader.mo')),
			'Symfony\Component\Translation\Loader\QtFileLoader' => array(array('translation.loader.ts')),
			'Symfony\Component\Translation\Loader\CsvFileLoader' => array(array('translation.loader.csv')),
			'Symfony\Component\Translation\Loader\IcuResFileLoader' => array(
				array(
					'translation.loader.res',
					'translation.loader.dat',
				),
			),
			'Symfony\Component\Translation\Loader\IcuDatFileLoader' => array(array('translation.loader.dat')),
			'Symfony\Component\Translation\Loader\IniFileLoader' => array(array('translation.loader.ini')),
			'Kdyby\Translation\Loader\NeonFileLoader' => array(array('translation.loader.neon')),
			'Kdyby\Translation\Console\ExtractCommand' => array(
				1 => array('translation.console.extract'),
			),
			'App\Forms\SignFormFactory' => array(
				1 => array('101_App_Forms_SignFormFactory'),
			),
			'App\Model\Facades\UserFacade' => array(
				1 => array('102_App_Model_Facades_UserFacade'),
			),
			'App\Presenters\BasePresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
				),
			),
			'Nette\Application\UI\Presenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\Control' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\PresenterComponent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\ComponentModel\Container' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\ComponentModel\Component' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\IRenderable' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\ComponentModel\IContainer' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\ComponentModel\IComponent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\ISignalReceiver' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\IStatePersistent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'ArrayAccess' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\IPresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				),
			),
			'App\Presenters\ErrorPresenter' => array(array('application.1')),
			'App\Presenters\HomepagePresenter' => array(array('application.2')),
			'App\Presenters\SignPresenter' => array(array('application.3')),
			'KdybyModule\CliPresenter' => array(array('application.4')),
			'NetteModule\ErrorPresenter' => array(array('application.5')),
			'NetteModule\MicroPresenter' => array(array('application.6')),
			'Nette\DI\Container' => array(1 => array('container')),
		),
		'services' => array(
			'101_App_Forms_SignFormFactory' => 'App\Forms\SignFormFactory',
			'102_App_Model_Facades_UserFacade' => 'App\Model\Facades\UserFacade',
			'annotations.cache.annotations' => 'Doctrine\Common\Cache\Cache',
			'annotations.reader' => 'Doctrine\Common\Annotations\Reader',
			'annotations.reflectionReader' => 'Doctrine\Common\Annotations\AnnotationReader',
			'application.1' => 'App\Presenters\ErrorPresenter',
			'application.2' => 'App\Presenters\HomepagePresenter',
			'application.3' => 'App\Presenters\SignPresenter',
			'application.4' => 'KdybyModule\CliPresenter',
			'application.5' => 'NetteModule\ErrorPresenter',
			'application.6' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'console.application' => 'Kdyby\Console\Application',
			'console.dicHelper' => 'Kdyby\Console\ContainerHelper',
			'console.helperSet' => 'Symfony\Component\Console\Helper\HelperSet',
			'container' => 'Nette\DI\Container',
			'doctrine.cache.default.dbalResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.hydration' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.metadata' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.ormResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.query' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cacheCleaner' => 'Kdyby\Doctrine\Tools\CacheCleaner',
			'doctrine.cli.0' => 'Doctrine\DBAL\Tools\Console\Command\ImportCommand',
			'doctrine.cli.1' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand',
			'doctrine.cli.10' => 'Kdyby\Doctrine\Console\ValidateSchemaCommand',
			'doctrine.cli.11' => 'Kdyby\Doctrine\Console\InfoCommand',
			'doctrine.cli.2' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand',
			'doctrine.cli.3' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand',
			'doctrine.cli.4' => 'Kdyby\Doctrine\Console\ConvertMappingCommand',
			'doctrine.cli.5' => 'Kdyby\Doctrine\Console\GenerateEntitiesCommand',
			'doctrine.cli.6' => 'Kdyby\Doctrine\Console\SchemaCreateCommand',
			'doctrine.cli.7' => 'Kdyby\Doctrine\Console\SchemaUpdateCommand',
			'doctrine.cli.8' => 'Kdyby\Doctrine\Console\SchemaDropCommand',
			'doctrine.cli.9' => 'Kdyby\Doctrine\Console\GenerateProxiesCommand',
			'doctrine.dao' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.daoFactory' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.default.connection' => 'Kdyby\Doctrine\Connection',
			'doctrine.default.dbalConfiguration' => 'Doctrine\DBAL\Configuration',
			'doctrine.default.driver.App.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.entityManager' => 'Kdyby\Doctrine\EntityManager',
			'doctrine.default.evm' => 'Kdyby\Events\NamespacedEventManager',
			'doctrine.default.metadataDriver' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain',
			'doctrine.default.ormConfiguration' => 'Kdyby\Doctrine\Configuration',
			'doctrine.default.proxyAutoloader' => 'Kdyby\Doctrine\Proxy\ProxyAutoloader',
			'doctrine.helper.connection' => 'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper',
			'doctrine.helper.entityManager' => 'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper',
			'doctrine.registry' => 'Kdyby\Doctrine\Registry',
			'doctrine.repositoryFactory' => 'Kdyby\Doctrine\RepositoryFactory',
			'doctrine.schemaManager' => 'Doctrine\DBAL\Schema\AbstractSchemaManager',
			'doctrine.schemaTool' => 'Doctrine\ORM\Tools\SchemaTool',
			'doctrine.schemaValidator' => 'Doctrine\ORM\Tools\SchemaValidator',
			'events.manager' => 'Kdyby\Events\LazyEventManager',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'nette.latte' => 'Latte\Engine',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
			'translation.catalogueCompiler' => 'Kdyby\Translation\CatalogueCompiler',
			'translation.catalogueFactory' => 'Kdyby\Translation\CatalogueFactory',
			'translation.console.extract' => 'Kdyby\Translation\Console\ExtractCommand',
			'translation.default' => 'Kdyby\Translation\Translator',
			'translation.dumper.csv' => 'Symfony\Component\Translation\Dumper\CsvFileDumper',
			'translation.dumper.ini' => 'Symfony\Component\Translation\Dumper\IniFileDumper',
			'translation.dumper.mo' => 'Symfony\Component\Translation\Dumper\MoFileDumper',
			'translation.dumper.neon' => 'Kdyby\Translation\Dumper\NeonFileDumper',
			'translation.dumper.php' => 'Symfony\Component\Translation\Dumper\PhpFileDumper',
			'translation.dumper.po' => 'Symfony\Component\Translation\Dumper\PoFileDumper',
			'translation.dumper.qt' => 'Symfony\Component\Translation\Dumper\QtFileDumper',
			'translation.dumper.res' => 'Symfony\Component\Translation\Dumper\IcuResFileDumper',
			'translation.dumper.xliff' => 'Symfony\Component\Translation\Dumper\XliffFileDumper',
			'translation.dumper.yml' => 'Symfony\Component\Translation\Dumper\YamlFileDumper',
			'translation.extractor' => 'Symfony\Component\Translation\Extractor\ChainExtractor',
			'translation.extractor.latte' => 'Kdyby\Translation\Extractors\LatteExtractor',
			'translation.fallbackResolver' => 'Kdyby\Translation\FallbackResolver',
			'translation.helpers' => 'Kdyby\Translation\TemplateHelpers',
			'translation.loader' => 'Kdyby\Translation\TranslationLoader',
			'translation.loader.csv' => 'Symfony\Component\Translation\Loader\CsvFileLoader',
			'translation.loader.dat' => 'Symfony\Component\Translation\Loader\IcuDatFileLoader',
			'translation.loader.ini' => 'Symfony\Component\Translation\Loader\IniFileLoader',
			'translation.loader.mo' => 'Symfony\Component\Translation\Loader\MoFileLoader',
			'translation.loader.neon' => 'Kdyby\Translation\Loader\NeonFileLoader',
			'translation.loader.php' => 'Symfony\Component\Translation\Loader\PhpFileLoader',
			'translation.loader.po' => 'Symfony\Component\Translation\Loader\PoFileLoader',
			'translation.loader.res' => 'Symfony\Component\Translation\Loader\IcuResFileLoader',
			'translation.loader.ts' => 'Symfony\Component\Translation\Loader\QtFileLoader',
			'translation.loader.xlf' => 'Symfony\Component\Translation\Loader\XliffFileLoader',
			'translation.loader.yml' => 'Symfony\Component\Translation\Loader\YamlFileLoader',
			'translation.panel' => 'Kdyby\Translation\Diagnostics\Panel',
			'translation.selector' => 'Symfony\Component\Translation\MessageSelector',
			'translation.userLocaleResolver' => 'Kdyby\Translation\IUserLocaleResolver',
			'translation.userLocaleResolver.acceptHeader' => 'Kdyby\Translation\LocaleResolver\AcceptHeaderResolver',
			'translation.userLocaleResolver.param' => 'Kdyby\Translation\LocaleResolver\LocaleParamResolver',
			'translation.userLocaleResolver.session' => 'Kdyby\Translation\LocaleResolver\SessionResolver',
			'translation.writer' => 'Symfony\Component\Translation\Writer\TranslationWriter',
		),
		'tags' => array(
			'inject' => array(
				'annotations.cache.annotations' => FALSE,
				'annotations.reader' => FALSE,
				'application.1' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'console.application' => FALSE,
				'console.helperSet' => FALSE,
				'doctrine.cache.default.dbalResult' => FALSE,
				'doctrine.cache.default.hydration' => FALSE,
				'doctrine.cache.default.metadata' => FALSE,
				'doctrine.cache.default.ormResult' => FALSE,
				'doctrine.cache.default.query' => FALSE,
				'doctrine.cacheCleaner' => FALSE,
				'doctrine.cli.0' => FALSE,
				'doctrine.cli.1' => FALSE,
				'doctrine.cli.10' => FALSE,
				'doctrine.cli.11' => FALSE,
				'doctrine.cli.2' => FALSE,
				'doctrine.cli.3' => FALSE,
				'doctrine.cli.4' => FALSE,
				'doctrine.cli.5' => FALSE,
				'doctrine.cli.6' => FALSE,
				'doctrine.cli.7' => FALSE,
				'doctrine.cli.8' => FALSE,
				'doctrine.cli.9' => FALSE,
				'doctrine.dao' => FALSE,
				'doctrine.daoFactory' => FALSE,
				'doctrine.default.connection' => FALSE,
				'doctrine.default.dbalConfiguration' => FALSE,
				'doctrine.default.driver.App.annotationsImpl' => FALSE,
				'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => FALSE,
				'doctrine.default.entityManager' => FALSE,
				'doctrine.default.metadataDriver' => FALSE,
				'doctrine.default.ormConfiguration' => FALSE,
				'doctrine.default.proxyAutoloader' => FALSE,
				'doctrine.schemaManager' => FALSE,
				'doctrine.schemaTool' => FALSE,
				'doctrine.schemaValidator' => FALSE,
				'events.manager' => FALSE,
				'translation.catalogueCompiler' => FALSE,
				'translation.catalogueFactory' => FALSE,
				'translation.console.extract' => FALSE,
				'translation.default' => FALSE,
				'translation.dumper.csv' => FALSE,
				'translation.dumper.ini' => FALSE,
				'translation.dumper.mo' => FALSE,
				'translation.dumper.neon' => FALSE,
				'translation.dumper.php' => FALSE,
				'translation.dumper.po' => FALSE,
				'translation.dumper.qt' => FALSE,
				'translation.dumper.res' => FALSE,
				'translation.dumper.xliff' => FALSE,
				'translation.dumper.yml' => FALSE,
				'translation.extractor' => FALSE,
				'translation.extractor.latte' => FALSE,
				'translation.fallbackResolver' => FALSE,
				'translation.helpers' => FALSE,
				'translation.loader' => FALSE,
				'translation.loader.csv' => FALSE,
				'translation.loader.dat' => FALSE,
				'translation.loader.ini' => FALSE,
				'translation.loader.mo' => FALSE,
				'translation.loader.neon' => FALSE,
				'translation.loader.php' => FALSE,
				'translation.loader.po' => FALSE,
				'translation.loader.res' => FALSE,
				'translation.loader.ts' => FALSE,
				'translation.loader.xlf' => FALSE,
				'translation.loader.yml' => FALSE,
				'translation.selector' => FALSE,
				'translation.userLocaleResolver' => FALSE,
				'translation.userLocaleResolver.acceptHeader' => FALSE,
				'translation.userLocaleResolver.param' => FALSE,
				'translation.userLocaleResolver.session' => FALSE,
				'translation.writer' => FALSE,
			),
			'nette.presenter' => array(
				'application.1' => 'App\Presenters\ErrorPresenter',
				'application.2' => 'App\Presenters\HomepagePresenter',
				'application.3' => 'App\Presenters\SignPresenter',
				'application.4' => 'KdybyModule\CliPresenter',
				'application.5' => 'NetteModule\ErrorPresenter',
				'application.6' => 'NetteModule\MicroPresenter',
			),
			'kdyby.console.helper' => array(
				'console.dicHelper' => 'dic',
				'doctrine.helper.connection' => 'db',
				'doctrine.helper.entityManager' => 'em',
			),
			'kdyby.console.command' => array(
				'doctrine.cli.0' => TRUE,
				'doctrine.cli.1' => TRUE,
				'doctrine.cli.10' => TRUE,
				'doctrine.cli.11' => TRUE,
				'doctrine.cli.2' => TRUE,
				'doctrine.cli.3' => TRUE,
				'doctrine.cli.4' => TRUE,
				'doctrine.cli.5' => TRUE,
				'doctrine.cli.6' => TRUE,
				'doctrine.cli.7' => TRUE,
				'doctrine.cli.8' => TRUE,
				'doctrine.cli.9' => TRUE,
				'translation.console.extract' => 'latte',
			),
			'kdyby.doctrine.connection' => array('doctrine.default.connection' => TRUE),
			'kdyby.doctrine.entityManager' => array(
				'doctrine.default.entityManager' => TRUE,
			),
			'kdyby.subscriber' => array(
				'doctrine.default.proxyAutoloader' => TRUE,
			),
			'translation.dumper' => array(
				'translation.dumper.csv' => 'csv',
				'translation.dumper.ini' => 'ini',
				'translation.dumper.mo' => 'mo',
				'translation.dumper.neon' => 'neon',
				'translation.dumper.php' => 'php',
				'translation.dumper.po' => 'po',
				'translation.dumper.qt' => 'qt',
				'translation.dumper.res' => 'res',
				'translation.dumper.xliff' => 'xliff',
				'translation.dumper.yml' => 'yml',
			),
			'translation.extractor' => array(
				'translation.extractor.latte' => 'latte',
			),
			'translation.loader' => array(
				'translation.loader.csv' => 'csv',
				'translation.loader.dat' => 'dat',
				'translation.loader.ini' => 'ini',
				'translation.loader.mo' => 'mo',
				'translation.loader.neon' => 'neon',
				'translation.loader.php' => 'php',
				'translation.loader.po' => 'po',
				'translation.loader.res' => 'res',
				'translation.loader.ts' => 'ts',
				'translation.loader.xlf' => 'xlf',
				'translation.loader.yml' => 'yml',
			),
		),
		'aliases' => array(
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => 'C:\xampp\htdocs\nette_doctrine\app',
			'wwwDir' => 'C:\xampp\htdocs\nette_doctrine\www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'environment' => 'development',
			'consoleMode' => FALSE,
			'container' => array('class' => NULL, 'parent' => NULL),
			'tempDir' => 'C:\xampp\htdocs\nette_doctrine\app/../temp',
			'doctrine.debug' => FALSE,
			'doctrine' => array(
				'orm' => array('defaultEntityManager' => 'default'),
				'dbal' => array('defaultConnection' => 'default'),
			),
		));
	}


	/**
	 * @return App\Forms\SignFormFactory
	 */
	public function createService__101_App_Forms_SignFormFactory()
	{
		$service = new App\Forms\SignFormFactory($this->getService('102_App_Model_Facades_UserFacade'), $this->getService('translation.default'));
		return $service;
	}


	/**
	 * @return App\Model\Facades\UserFacade
	 */
	public function createService__102_App_Model_Facades_UserFacade()
	{
		$service = new App\Model\Facades\UserFacade($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceAnnotations__cache__annotations()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Annotations', TRUE);
		$service->setNamespace('Kdyby_annotations.cache.annotations_3926327d');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Annotations\Reader
	 */
	public function createServiceAnnotations__reader()
	{
		$service = new Doctrine\Common\Annotations\CachedReader($this->getService('annotations.reflectionReader'), $this->getService('annotations.cache.annotations'),
			TRUE);
		return $service;
	}


	/**
	 * @return Doctrine\Common\Annotations\AnnotationReader
	 */
	public function createServiceAnnotations__reflectionReader()
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('persistent');
		$service->addGlobalIgnoredName('serializationVersion');
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->userFacade = $this->getService('102_App_Model_Facades_UserFacade');
		$service->translator = $this->getService('translation.default');
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'App\Presenters\ErrorPresenter',
			'onShutdown',
		), $service->onShutdown);
		return $service;
	}


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->userFacade = $this->getService('102_App_Model_Facades_UserFacade');
		$service->translator = $this->getService('translation.default');
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'App\Presenters\HomepagePresenter',
			'onShutdown',
		), $service->onShutdown);
		return $service;
	}


	/**
	 * @return App\Presenters\SignPresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\Presenters\SignPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->userFacade = $this->getService('102_App_Model_Facades_UserFacade');
		$service->translator = $this->getService('translation.default');
		$service->formFactory = $this->getService('101_App_Forms_SignFormFactory');
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'App\Presenters\SignPresenter',
			'onShutdown',
		), $service->onShutdown);
		return $service;
	}


	/**
	 * @return KdybyModule\CliPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new KdybyModule\CliPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectConsole($this->getService('console.application'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'KdybyModule\CliPresenter',
			'onShutdown',
		), $service->onShutdown);
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('application.presenterFactory')));
		$service->onStartup = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onStartup',
		), $service->onStartup);
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onShutdown',
		), $service->onShutdown);
		$service->onRequest = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onRequest',
		), $service->onRequest);
		$service->onPresenter = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onPresenter',
		), $service->onPresenter);
		$service->onResponse = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onResponse',
		), $service->onResponse);
		$service->onError = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onError',
		), $service->onError);
		$service->onRequest[] = array(
			$this->getService('translation.userLocaleResolver.param'),
			'onRequest',
		);
		$self = $this; $service->onStartup[] = function () use ($self) { $self->getService('translation.default'); };
		$service->onRequest[] = array(
			$this->getService('translation.panel'),
			'onRequest',
		);
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'), $this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'C:\xampp\htdocs\nette_doctrine\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(array(
			'*' => 'App\*Module\Presenters\*Presenter',
		));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\FileJournal('C:\xampp\htdocs\nette_doctrine\app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\nette_doctrine\app/../temp/cache', $this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Kdyby\Console\Application
	 */
	public function createServiceConsole__application()
	{
		$service = new Kdyby\Console\Application('Nette Framework', 'unknown');
		$service->setHelperSet($this->getService('console.helperSet'));
		$service->injectServiceLocator($this);
		return $service;
	}


	/**
	 * @return Kdyby\Console\ContainerHelper
	 */
	public function createServiceConsole__dicHelper()
	{
		$service = new Kdyby\Console\ContainerHelper($this);
		return $service;
	}


	/**
	 * @return Symfony\Component\Console\Helper\HelperSet
	 */
	public function createServiceConsole__helperSet()
	{
		$service = new Symfony\Component\Console\Helper\HelperSet(array(
			new Symfony\Component\Console\Helper\FormatterHelper,
			new Symfony\Component\Console\Helper\QuestionHelper,
			new Kdyby\Console\Helpers\PresenterHelper($this->getService('application.application')),
			new Symfony\Component\Console\Helper\ProgressHelper(FALSE),
			new Symfony\Component\Console\Helper\DialogHelper(FALSE),
		));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__dbalResult()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.dbalResult', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.dbalResult_3926327d');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__hydration()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.hydration', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.hydration_3926327d');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__metadata()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.metadata', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.metadata_3926327d');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__ormResult()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.ormResult', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.ormResult_3926327d');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__query()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.query', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.query_3926327d');
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Tools\CacheCleaner
	 */
	public function createServiceDoctrine__cacheCleaner()
	{
		$service = new Kdyby\Doctrine\Tools\CacheCleaner($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Tools\Console\Command\ImportCommand
	 */
	public function createServiceDoctrine__cli__0()
	{
		$service = new Doctrine\DBAL\Tools\Console\Command\ImportCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand
	 */
	public function createServiceDoctrine__cli__1()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\ValidateSchemaCommand
	 */
	public function createServiceDoctrine__cli__10()
	{
		$service = new Kdyby\Doctrine\Console\ValidateSchemaCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\InfoCommand
	 */
	public function createServiceDoctrine__cli__11()
	{
		$service = new Kdyby\Doctrine\Console\InfoCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand
	 */
	public function createServiceDoctrine__cli__2()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand
	 */
	public function createServiceDoctrine__cli__3()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\ConvertMappingCommand
	 */
	public function createServiceDoctrine__cli__4()
	{
		$service = new Kdyby\Doctrine\Console\ConvertMappingCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\GenerateEntitiesCommand
	 */
	public function createServiceDoctrine__cli__5()
	{
		$service = new Kdyby\Doctrine\Console\GenerateEntitiesCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaCreateCommand
	 */
	public function createServiceDoctrine__cli__6()
	{
		$service = new Kdyby\Doctrine\Console\SchemaCreateCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaUpdateCommand
	 */
	public function createServiceDoctrine__cli__7()
	{
		$service = new Kdyby\Doctrine\Console\SchemaUpdateCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaDropCommand
	 */
	public function createServiceDoctrine__cli__8()
	{
		$service = new Kdyby\Doctrine\Console\SchemaDropCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\GenerateProxiesCommand
	 */
	public function createServiceDoctrine__cli__9()
	{
		$service = new Kdyby\Doctrine\Console\GenerateProxiesCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityDao
	 */
	public function createServiceDoctrine__dao($entityName)
	{
		$service = $this->getService('doctrine.default.entityManager')->getDao($entityName);
		if (!$service instanceof Kdyby\Doctrine\EntityDao) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.dao\', value returned by factory is not Kdyby\Doctrine\EntityDao type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityDaoFactory
	 */
	public function createServiceDoctrine__daoFactory()
	{
		return new Container_0faaa00b92_Kdyby_Doctrine_EntityDaoFactoryImpl_doctrine_daoFactory($this);
	}


	/**
	 * @return Kdyby\Doctrine\Connection
	 */
	public function createServiceDoctrine__default__connection()
	{
		$service = Kdyby\Doctrine\Connection::create(array(
			'dbname' => 'db',
			'host' => '127.0.0.1',
			'port' => NULL,
			'user' => 'root',
			'password' => NULL,
			'charset' => 'UTF8',
			'driver' => 'pdo_mysql',
			'driverClass' => NULL,
			'options' => NULL,
			'path' => NULL,
			'memory' => NULL,
			'unix_socket' => NULL,
			'platformService' => NULL,
			'defaultTableOptions' => array(),
			'schemaFilter' => NULL,
			'debug' => TRUE,
		), $this->getService('doctrine.default.dbalConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\Connection) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.connection\', value returned by factory is not Kdyby\Doctrine\Connection type.');
		}
		$service->setSchemaTypes(array(
			'enum' => 'enum',
			'point' => 'point',
			'lineString' => 'lineString',
			'multiLineString' => 'multiLineString',
			'polygon' => 'polygon',
			'multiPolygon' => 'multiPolygon',
			'geometryCollection' => 'geometryCollection',
		));
		$service->setDbalTypes(array(
			'enum' => 'Kdyby\Doctrine\Types\Enum',
			'point' => 'Kdyby\Doctrine\Types\Point',
			'lineString' => 'Kdyby\Doctrine\Types\LineString',
			'multiLineString' => 'Kdyby\Doctrine\Types\MultiLineString',
			'polygon' => 'Kdyby\Doctrine\Types\Polygon',
			'multiPolygon' => 'Kdyby\Doctrine\Types\MultiPolygon',
			'geometryCollection' => 'Kdyby\Doctrine\Types\GeometryCollection',
		));
		Kdyby\Doctrine\Diagnostics\Panel::register($service);
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Configuration
	 */
	public function createServiceDoctrine__default__dbalConfiguration()
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.dbalResult'));
		$service->setSQLLogger(new Doctrine\DBAL\Logging\LoggerChain);
		$service->setFilterSchemaAssetsExpression(NULL);
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	 */
	public function createServiceDoctrine__default__driver__App__annotationsImpl()
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver(array('C:\xampp\htdocs\nette_doctrine\app'), $this->getService('annotations.reader'),
			$this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	 */
	public function createServiceDoctrine__default__driver__Kdyby_Doctrine__annotationsImpl()
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver(array(
			'C:\xampp\htdocs\nette_doctrine\vendor\kdyby\doctrine\src\Kdyby\Doctrine\DI/../Entities',
		), $this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityManager
	 */
	public function createServiceDoctrine__default__entityManager()
	{
		$service = Kdyby\Doctrine\EntityManager::create($this->getService('doctrine.default.connection'), $this->getService('doctrine.default.ormConfiguration'),
			$this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\EntityManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.entityManager\', value returned by factory is not Kdyby\Doctrine\EntityManager type.');
		}
		$service->onDaoCreate = $this->getService('events.manager')->createEvent(array(
			'Kdyby\Doctrine\EntityManager',
			'onDaoCreate',
		), $service->onDaoCreate);
		return $service;
	}


	/**
	 * @return Kdyby\Events\NamespacedEventManager
	 */
	public function createServiceDoctrine__default__evm()
	{
		$service = new Kdyby\Events\NamespacedEventManager('Doctrine\ORM\Event::', $this->getService('events.manager'));
		$service->dispatchGlobalEvents = TRUE;
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain
	 */
	public function createServiceDoctrine__default__metadataDriver()
	{
		$service = new Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('doctrine.default.driver.App.annotationsImpl'), 'App');
		$service->addDriver($this->getService('doctrine.default.driver.Kdyby_Doctrine.annotationsImpl'), 'Kdyby\Doctrine');
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Configuration
	 */
	public function createServiceDoctrine__default__ormConfiguration()
	{
		$service = new Kdyby\Doctrine\Configuration;
		$service->setMetadataCacheImpl($this->getService('doctrine.cache.default.metadata'));
		$service->setQueryCacheImpl($this->getService('doctrine.cache.default.query'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.ormResult'));
		$service->setHydrationCacheImpl($this->getService('doctrine.cache.default.hydration'));
		$service->setMetadataDriverImpl($this->getService('doctrine.default.metadataDriver'));
		$service->setClassMetadataFactoryName('Kdyby\Doctrine\Mapping\ClassMetadataFactory');
		$service->setDefaultRepositoryClassName('Kdyby\Doctrine\EntityDao');
		$service->setRepositoryFactory($this->getService('doctrine.repositoryFactory'));
		$service->setProxyDir('C:\xampp\htdocs\nette_doctrine\app/../temp/proxies');
		$service->setProxyNamespace('Kdyby\GeneratedProxy');
		$service->setAutoGenerateProxyClasses(1);
		$service->setEntityNamespaces(array());
		$service->setCustomHydrationModes(array());
		$service->setCustomStringFunctions(array());
		$service->setCustomNumericFunctions(array());
		$service->setCustomDatetimeFunctions(array());
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setQuoteStrategy(new Doctrine\ORM\Mapping\DefaultQuoteStrategy);
		$service->setEntityListenerResolver(new Kdyby\Doctrine\Mapping\EntityListenerResolver($this));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Proxy\ProxyAutoloader
	 */
	public function createServiceDoctrine__default__proxyAutoloader()
	{
		$service = new Kdyby\Doctrine\Proxy\ProxyAutoloader('C:\xampp\htdocs\nette_doctrine\app/../temp/proxies', 'Kdyby\GeneratedProxy');
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper
	 */
	public function createServiceDoctrine__helper__connection()
	{
		$service = new Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($this->getService('doctrine.default.connection'));
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper
	 */
	public function createServiceDoctrine__helper__entityManager()
	{
		$service = new Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Registry
	 */
	public function createServiceDoctrine__registry()
	{
		$service = new Kdyby\Doctrine\Registry(array(
			'default' => 'doctrine.default.connection',
		), array(
			'default' => 'doctrine.default.entityManager',
		), 'default', 'default', $this);
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\RepositoryFactory
	 */
	public function createServiceDoctrine__repositoryFactory()
	{
		$service = new Kdyby\Doctrine\RepositoryFactory($this);
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Schema\AbstractSchemaManager
	 */
	public function createServiceDoctrine__schemaManager()
	{
		$service = $this->getService('doctrine.default.connection')->getSchemaManager();
		if (!$service instanceof Doctrine\DBAL\Schema\AbstractSchemaManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.schemaManager\', value returned by factory is not Doctrine\DBAL\Schema\AbstractSchemaManager type.');
		}
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\SchemaTool
	 */
	public function createServiceDoctrine__schemaTool()
	{
		$service = new Doctrine\ORM\Tools\SchemaTool($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\SchemaValidator
	 */
	public function createServiceDoctrine__schemaValidator()
	{
		$service = new Doctrine\ORM\Tools\SchemaValidator($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Kdyby\Events\LazyEventManager
	 */
	public function createServiceEvents__manager()
	{
		$service = new Kdyby\Events\LazyEventManager(array(
			'Nette\DI\Container::onInitialize' => array('doctrine.default.proxyAutoloader'),
		), $this);
		Kdyby\Events\Diagnostics\Panel::register($service, $this)->renderPanel = TRUE;
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_0faaa00b92_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('security.user'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		trigger_error('Service nette.latte is deprecated, implement Nette\Bridges\ApplicationLatte\ILatteFactory.',
			16384);
		$service->setTempDirectory('C:\xampp\htdocs\nette_doctrine\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->onCompile = $this->getService('events.manager')->createEvent(array('Latte\Engine', 'onCompile'), $service->onCompile);
		$service->onCompile[] = function($engine) { Kdyby\Translation\Latte\TranslateMacros::install($engine->getCompiler()); };
		$service->addFilter('translate', array(
			$this->getService('translation.helpers'),
			'translate',
		));
		$service->addFilter('getTranslator', array(
			$this->getService('translation.helpers'),
			'getTranslator',
		));
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		$service->onLoggedIn = $this->getService('events.manager')->createEvent(array('Nette\Security\User', 'onLoggedIn'), $service->onLoggedIn);
		$service->onLoggedOut = $this->getService('events.manager')->createEvent(array('Nette\Security\User', 'onLoggedOut'), $service->onLoggedOut);
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Translation\CatalogueCompiler
	 */
	public function createServiceTranslation__catalogueCompiler()
	{
		$service = new Kdyby\Translation\CatalogueCompiler(new Kdyby\Translation\Caching\PhpFileStorage('C:\xampp\htdocs\nette_doctrine\app/../temp/cache', $this->getService('cache.journal')),
			$this->getService('translation.fallbackResolver'), $this->getService('translation.catalogueFactory'));
		$service->enableDebugMode();
		return $service;
	}


	/**
	 * @return Kdyby\Translation\CatalogueFactory
	 */
	public function createServiceTranslation__catalogueFactory()
	{
		$service = new Kdyby\Translation\CatalogueFactory($this->getService('translation.fallbackResolver'), $this->getService('translation.loader'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Console\ExtractCommand
	 */
	public function createServiceTranslation__console__extract()
	{
		$service = new Kdyby\Translation\Console\ExtractCommand;
		$service->defaultOutputDir = 'C:\xampp\htdocs\nette_doctrine\app/lang';
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Translator
	 */
	public function createServiceTranslation__default()
	{
		$service = new Kdyby\Translation\Translator($this->getService('translation.userLocaleResolver'), $this->getService('translation.selector'),
			$this->getService('translation.catalogueCompiler'), $this->getService('translation.fallbackResolver'),
			$this->getService('translation.loader'));
		$this->getService('translation.userLocaleResolver.param')->setTranslator($service);
		$service->setDefaultLocale('cs');
		$service->setLocaleWhitelist(array('cs', 'en'));
		$service->setFallbackLocales(array('cs', 'en'));
		$this->getService('translation.panel')->register($service);
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\article\article.cs_CZ.neon', 'cs_CZ',
			'article');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\article\article.en_US.neon', 'en_US',
			'article');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\articleCategory\articleCategory.cs_CZ.neon',
			'cs_CZ', 'articleCategory');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\articleCategory\articleCategory.en_US.neon',
			'en_US', 'articleCategory');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\common\common.cs_CZ.neon', 'cs_CZ',
			'common');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\common\common.en_US.neon', 'en_US',
			'common');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\exception\exception.cs_CZ.neon',
			'cs_CZ', 'exception');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\exception\exception.en_US.neon',
			'en_US', 'exception');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\form\form.cs_CZ.neon', 'cs_CZ',
			'form');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\form\form.en_US.neon', 'en_US',
			'form');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\homepage\homepage.cs_CZ.neon', 'cs_CZ',
			'homepage');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\homepage\homepage.en_US.neon', 'en_US',
			'homepage');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\menu\menu.cs_CZ.neon', 'cs_CZ',
			'menu');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\menu\menu.en_US.neon', 'en_US',
			'menu');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\sign\sign.cs_CZ.neon', 'cs_CZ',
			'sign');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\sign\sign.en_US.neon', 'en_US',
			'sign');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\user\user.cs_CZ.neon', 'cs_CZ',
			'user');
		$service->addResource('neon', 'C:\xampp\htdocs\nette_doctrine\app/lang\user\user.en_US.neon', 'en_US',
			'user');
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\CsvFileDumper
	 */
	public function createServiceTranslation__dumper__csv()
	{
		$service = new Symfony\Component\Translation\Dumper\CsvFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\IniFileDumper
	 */
	public function createServiceTranslation__dumper__ini()
	{
		$service = new Symfony\Component\Translation\Dumper\IniFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\MoFileDumper
	 */
	public function createServiceTranslation__dumper__mo()
	{
		$service = new Symfony\Component\Translation\Dumper\MoFileDumper;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Dumper\NeonFileDumper
	 */
	public function createServiceTranslation__dumper__neon()
	{
		$service = new Kdyby\Translation\Dumper\NeonFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\PhpFileDumper
	 */
	public function createServiceTranslation__dumper__php()
	{
		$service = new Symfony\Component\Translation\Dumper\PhpFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\PoFileDumper
	 */
	public function createServiceTranslation__dumper__po()
	{
		$service = new Symfony\Component\Translation\Dumper\PoFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\QtFileDumper
	 */
	public function createServiceTranslation__dumper__qt()
	{
		$service = new Symfony\Component\Translation\Dumper\QtFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\IcuResFileDumper
	 */
	public function createServiceTranslation__dumper__res()
	{
		$service = new Symfony\Component\Translation\Dumper\IcuResFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\XliffFileDumper
	 */
	public function createServiceTranslation__dumper__xliff()
	{
		$service = new Symfony\Component\Translation\Dumper\XliffFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\YamlFileDumper
	 */
	public function createServiceTranslation__dumper__yml()
	{
		$service = new Symfony\Component\Translation\Dumper\YamlFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Extractor\ChainExtractor
	 */
	public function createServiceTranslation__extractor()
	{
		$service = new Symfony\Component\Translation\Extractor\ChainExtractor;
		$service->addExtractor('latte', $this->getService('translation.extractor.latte'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Extractors\LatteExtractor
	 */
	public function createServiceTranslation__extractor__latte()
	{
		$service = new Kdyby\Translation\Extractors\LatteExtractor;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\FallbackResolver
	 */
	public function createServiceTranslation__fallbackResolver()
	{
		$service = new Kdyby\Translation\FallbackResolver;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\TemplateHelpers
	 */
	public function createServiceTranslation__helpers()
	{
		$service = $this->getService('translation.default')->createTemplateHelpers();
		if (!$service instanceof Kdyby\Translation\TemplateHelpers) {
			throw new Nette\UnexpectedValueException('Unable to create service \'translation.helpers\', value returned by factory is not Kdyby\Translation\TemplateHelpers type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Translation\TranslationLoader
	 */
	public function createServiceTranslation__loader()
	{
		$service = new Kdyby\Translation\TranslationLoader;
		$service->injectServiceIds(array(
			'php' => 'translation.loader.php',
			'yml' => 'translation.loader.yml',
			'xlf' => 'translation.loader.xlf',
			'po' => 'translation.loader.po',
			'mo' => 'translation.loader.mo',
			'ts' => 'translation.loader.ts',
			'csv' => 'translation.loader.csv',
			'res' => 'translation.loader.res',
			'dat' => 'translation.loader.dat',
			'ini' => 'translation.loader.ini',
			'neon' => 'translation.loader.neon',
		), $this);
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\CsvFileLoader
	 */
	public function createServiceTranslation__loader__csv()
	{
		$service = new Symfony\Component\Translation\Loader\CsvFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IcuDatFileLoader
	 */
	public function createServiceTranslation__loader__dat()
	{
		$service = new Symfony\Component\Translation\Loader\IcuDatFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IniFileLoader
	 */
	public function createServiceTranslation__loader__ini()
	{
		$service = new Symfony\Component\Translation\Loader\IniFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\MoFileLoader
	 */
	public function createServiceTranslation__loader__mo()
	{
		$service = new Symfony\Component\Translation\Loader\MoFileLoader;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Loader\NeonFileLoader
	 */
	public function createServiceTranslation__loader__neon()
	{
		$service = new Kdyby\Translation\Loader\NeonFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\PhpFileLoader
	 */
	public function createServiceTranslation__loader__php()
	{
		$service = new Symfony\Component\Translation\Loader\PhpFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\PoFileLoader
	 */
	public function createServiceTranslation__loader__po()
	{
		$service = new Symfony\Component\Translation\Loader\PoFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IcuResFileLoader
	 */
	public function createServiceTranslation__loader__res()
	{
		$service = new Symfony\Component\Translation\Loader\IcuResFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\QtFileLoader
	 */
	public function createServiceTranslation__loader__ts()
	{
		$service = new Symfony\Component\Translation\Loader\QtFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\XliffFileLoader
	 */
	public function createServiceTranslation__loader__xlf()
	{
		$service = new Symfony\Component\Translation\Loader\XliffFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\YamlFileLoader
	 */
	public function createServiceTranslation__loader__yml()
	{
		$service = new Symfony\Component\Translation\Loader\YamlFileLoader;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Diagnostics\Panel
	 */
	public function createServiceTranslation__panel()
	{
		$service = new Kdyby\Translation\Diagnostics\Panel('C:\xampp\htdocs\nette_doctrine');
		$service->setLocaleWhitelist(array('cs', 'en'));
		$service->setLocaleResolvers(array(
			$this->getService('translation.userLocaleResolver.param'),
			$this->getService('translation.userLocaleResolver.acceptHeader'),
		));
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\MessageSelector
	 */
	public function createServiceTranslation__selector()
	{
		$service = new Symfony\Component\Translation\MessageSelector;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\IUserLocaleResolver
	 */
	public function createServiceTranslation__userLocaleResolver()
	{
		$service = new Kdyby\Translation\LocaleResolver\ChainResolver;
		$service->addResolver($this->getService('translation.userLocaleResolver.acceptHeader'));
		$service->addResolver($this->getService('translation.userLocaleResolver.param'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\AcceptHeaderResolver
	 */
	public function createServiceTranslation__userLocaleResolver__acceptHeader()
	{
		$service = new Kdyby\Translation\LocaleResolver\AcceptHeaderResolver($this->getService('http.request'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\LocaleParamResolver
	 */
	public function createServiceTranslation__userLocaleResolver__param()
	{
		$service = new Kdyby\Translation\LocaleResolver\LocaleParamResolver;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\SessionResolver
	 */
	public function createServiceTranslation__userLocaleResolver__session()
	{
		$service = new Kdyby\Translation\LocaleResolver\SessionResolver($this->getService('session.session'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Writer\TranslationWriter
	 */
	public function createServiceTranslation__writer()
	{
		$service = new Symfony\Component\Translation\Writer\TranslationWriter;
		$service->addDumper('php', $this->getService('translation.dumper.php'));
		$service->addDumper('xliff', $this->getService('translation.dumper.xliff'));
		$service->addDumper('po', $this->getService('translation.dumper.po'));
		$service->addDumper('mo', $this->getService('translation.dumper.mo'));
		$service->addDumper('yml', $this->getService('translation.dumper.yml'));
		$service->addDumper('neon', $this->getService('translation.dumper.neon'));
		$service->addDumper('qt', $this->getService('translation.dumper.qt'));
		$service->addDumper('csv', $this->getService('translation.dumper.csv'));
		$service->addDumper('ini', $this->getService('translation.dumper.ini'));
		$service->addDumper('res', $this->getService('translation.dumper.res'));
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		$this->getService('events.manager')->createEvent(array('Nette\DI\Container', 'onInitialize'))->dispatch($this);
		header('X-Frame-Options: SAMEORIGIN');
		header('X-Powered-By: Nette Framework');
		header('Content-Type: text/html; charset=utf-8');
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = TRUE;
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();;
		Doctrine\Common\Annotations\AnnotationRegistry::registerLoader("class_exists");
		Kdyby\Doctrine\Diagnostics\Panel::registerBluescreen($this);
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\xampp\htdocs\nette_doctrine\vendor\kdyby\doctrine\src\Kdyby\Doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\xampp\htdocs\nette_doctrine\vendor\doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\xampp\htdocs\nette_doctrine\app/../temp/proxies';
		Kdyby\Translation\Diagnostics\Panel::registerBluescreen();
	}

}



final class Container_0faaa00b92_Kdyby_Doctrine_EntityDaoFactoryImpl_doctrine_daoFactory implements Kdyby\Doctrine\EntityDaoFactory
{
	private $container;


	public function __construct(Container_0faaa00b92 $container)
	{
		$this->container = $container;
	}


	public function create($entityName)
	{
		$service = $this->container->getService('doctrine.default.entityManager')->getDao($entityName);
		if (!$service instanceof Kdyby\Doctrine\EntityDao) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.daoFactory\', value returned by factory is not Kdyby\Doctrine\EntityDao type.');
		}
		return $service;
	}

}



final class Container_0faaa00b92_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_0faaa00b92 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('C:\xampp\htdocs\nette_doctrine\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->onCompile = $this->container->getService('events.manager')->createEvent(array('Latte\Engine', 'onCompile'), $service->onCompile);
		$service->onCompile[] = function($engine) { Kdyby\Translation\Latte\TranslateMacros::install($engine->getCompiler()); };
		$service->addFilter('translate', array(
			$this->container->getService('translation.helpers'),
			'translate',
		));
		$service->addFilter('getTranslator', array(
			$this->container->getService('translation.helpers'),
			'getTranslator',
		));
		return $service;
	}

}
