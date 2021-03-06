<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Users\Controller\Index' =>
                'Users\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'users' => array(

                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/users',

                    'defaults' => array(
                        '__NAMESPACE__' => 'Users\Controller',

                        'controller'    => 'Index',

                         'action'        => 'index',

                    ),
                    'login' => array(
                        '__NAMESPACE__' => 'Users\Controller',

                        'controller'    => 'Index',

                        'action'        => 'login',

                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'users' => __DIR__ . '/../view',
        ),
    ),
    'modules' => array(
	        'Application',
            'Users',
    ),

);
