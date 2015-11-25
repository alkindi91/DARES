(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"welcome","action":"App\Http\Controllers\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/login","name":"login","action":"App\Http\Controllers\Auth\AuthController@getLogin"},{"host":null,"methods":["POST"],"uri":"auth\/login","name":"login","action":"App\Http\Controllers\Auth\AuthController@postLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/logout","name":"logout","action":"App\Http\Controllers\Auth\AuthController@getLogout"},{"host":null,"methods":["GET","HEAD"],"uri":"ajax\/togglesidebar","name":"ajax.togglesidebar","action":"App\Http\Controllers\Ajax\SideMenuController@toggle"},{"host":null,"methods":["GET","HEAD"],"uri":"users","name":"users.index","action":"Modules\Users\Http\Controllers\UsersController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/create","name":"users.create","action":"Modules\Users\Http\Controllers\UsersController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/edit\/{uuser}","name":"users.edit","action":"Modules\Users\Http\Controllers\UsersController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/show\/{uuser}","name":"users.show","action":"Modules\Users\Http\Controllers\UsersController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/delete\/{uuser?}","name":"users.delete","action":"Modules\Users\Http\Controllers\UsersController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/delete-bulk","name":"users.delete-bulk","action":"Modules\Users\Http\Controllers\UsersController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"users\/store","name":"users.store","action":"Modules\Users\Http\Controllers\UsersController@store"},{"host":null,"methods":["POST"],"uri":"users\/update\/{uuser}","name":"users.update","action":"Modules\Users\Http\Controllers\UsersController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/roles","name":"roles.index","action":"Modules\Users\Http\Controllers\RolesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/roles\/create","name":"roles.create","action":"Modules\Users\Http\Controllers\RolesController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/roles\/edit\/{urole}","name":"roles.edit","action":"Modules\Users\Http\Controllers\RolesController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/roles\/show\/{urole}","name":"roles.show","action":"Modules\Users\Http\Controllers\RolesController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/roles\/delete\/{urole?}","name":"roles.delete","action":"Modules\Users\Http\Controllers\RolesController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"users\/roles\/delete-bulk","name":"roles.delete-bulk","action":"Modules\Users\Http\Controllers\RolesController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"users\/roles\/store","name":"roles.store","action":"Modules\Users\Http\Controllers\RolesController@store"},{"host":null,"methods":["POST"],"uri":"users\/roles\/update\/{urole}","name":"roles.update","action":"Modules\Users\Http\Controllers\RolesController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure","name":"faculty.index","action":"Modules\Academystructure\Http\Controllers\FacultyController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/create","name":"faculty.create","action":"Modules\Academystructure\Http\Controllers\FacultyController@create_faculty"},{"host":null,"methods":["POST"],"uri":"academystructure\/store","name":"faculty.store","action":"Modules\Academystructure\Http\Controllers\FacultyController@store_faculty"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/edit\/{asFaculty}","name":"faculty.edit","action":"Modules\Academystructure\Http\Controllers\FacultyController@edit_faculty"},{"host":null,"methods":["POST"],"uri":"academystructure\/update\/{asFaculty}","name":"faculty.update","action":"Modules\Academystructure\Http\Controllers\FacultyController@update_faculty"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/delete\/{asFaculty}","name":"faculty.delete","action":"Modules\Academystructure\Http\Controllers\FacultyController@delete_faculty"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/year\/{asFaculty}","name":"year.index","action":"Modules\Academystructure\Http\Controllers\YearController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/year\/create\/{asFaculty}","name":"year.create","action":"Modules\Academystructure\Http\Controllers\YearController@create_year"},{"host":null,"methods":["POST"],"uri":"academystructure\/year\/store","name":"year.store","action":"Modules\Academystructure\Http\Controllers\YearController@store_year"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/year\/edit\/{asYear}","name":"year.edit","action":"Modules\Academystructure\Http\Controllers\YearController@edit_year"},{"host":null,"methods":["POST"],"uri":"academystructure\/year\/update\/{asYear}","name":"year.update","action":"Modules\Academystructure\Http\Controllers\YearController@update_year"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/year\/delete\/{asYear}","name":"year.delete","action":"Modules\Academystructure\Http\Controllers\YearController@delete_year"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/term\/{asYear}","name":"term.index","action":"Modules\Academystructure\Http\Controllers\TermController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/term\/create\/{asYear}","name":"term.create","action":"Modules\Academystructure\Http\Controllers\TermController@create_term"},{"host":null,"methods":["POST"],"uri":"academystructure\/term\/store","name":"term.store","action":"Modules\Academystructure\Http\Controllers\TermController@store_year"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/term\/edit\/{asTerm}","name":"term.edit","action":"Modules\Academystructure\Http\Controllers\TermController@edit_term"},{"host":null,"methods":["POST"],"uri":"academystructure\/term\/update\/{asTerm}","name":"term.update","action":"Modules\Academystructure\Http\Controllers\TermController@update_term"},{"host":null,"methods":["GET","HEAD"],"uri":"academystructure\/term\/delete\/{asYear}","name":"term.delete","action":"Modules\Academystructure\Http\Controllers\TermController@delete_term"},{"host":null,"methods":["GET","HEAD"],"uri":"ahmedtest","name":"ahmedtest.index","action":"Modules\AhmedTest\Http\Controllers\AhmedTestController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"ahmedtest\/create","name":"ahmedtest.create","action":"Modules\AhmedTest\Http\Controllers\AhmedTestController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"ahmedtest\/show\/{id}","name":"ahmedtest.show","action":"Modules\AhmedTest\Http\Controllers\AhmedTestController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"ahmedtest\/edit\/{id}","name":"ahmedtest.edit","action":"Modules\AhmedTest\Http\Controllers\AhmedTestController@edit"},{"host":null,"methods":["POST"],"uri":"ahmedtest\/update\/{id}","name":"ahmedtest.update","action":"Modules\AhmedTest\Http\Controllers\AhmedTestController@update"},{"host":null,"methods":["POST"],"uri":"ahmedtest\/store","name":"ahmedtest.store","action":"Modules\AhmedTest\Http\Controllers\AhmedTestController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"registration","name":"registration.index","action":"Modules\Registration\Http\Controllers\RegistrationController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/steps","name":"registration.steps.index","action":"Modules\Registration\Http\Controllers\StepsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/steps\/create","name":"registration.steps.create","action":"Modules\Registration\Http\Controllers\StepsController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/steps\/edit\/{step}","name":"registration.steps.edit","action":"Modules\Registration\Http\Controllers\StepsController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/steps\/show\/{step}","name":"registration.steps.show","action":"Modules\Registration\Http\Controllers\StepsController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/steps\/delete\/{step}","name":"registration.steps.delete","action":"Modules\Registration\Http\Controllers\StepsController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/steps\/delete-bulk","name":"registration.steps.delete-bulk","action":"Modules\Registration\Http\Controllers\StepsController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"registration\/steps\/store","name":"registration.steps.store","action":"Modules\Registration\Http\Controllers\StepsController@store"},{"host":null,"methods":["POST"],"uri":"registration\/steps\/update\/{step}","name":"registration.steps.update","action":"Modules\Registration\Http\Controllers\StepsController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/years","name":"registration.years.index","action":"Modules\Registration\Http\Controllers\YearsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/years\/create","name":"registration.years.create","action":"Modules\Registration\Http\Controllers\YearsController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/years\/edit\/{year}","name":"registration.years.edit","action":"Modules\Registration\Http\Controllers\YearsController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/years\/show\/{year}","name":"registration.years.show","action":"Modules\Registration\Http\Controllers\YearsController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/years\/delete\/{year}","name":"registration.years.delete","action":"Modules\Registration\Http\Controllers\YearsController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/years\/delete-bulk","name":"registration.years.delete-bulk","action":"Modules\Registration\Http\Controllers\YearsController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"registration\/years\/store","name":"registration.years.store","action":"Modules\Registration\Http\Controllers\YearsController@store"},{"host":null,"methods":["POST"],"uri":"registration\/years\/update\/{year}","name":"registration.years.update","action":"Modules\Registration\Http\Controllers\YearsController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/periods\/{year}","name":"registration.periods.index","action":"Modules\Registration\Http\Controllers\PeriodsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/periods\/create\/{year}","name":"registration.periods.create","action":"Modules\Registration\Http\Controllers\PeriodsController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/periods\/edit\/{period}","name":"registration.periods.edit","action":"Modules\Registration\Http\Controllers\PeriodsController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/periods\/show\/{period}","name":"registration.periods.show","action":"Modules\Registration\Http\Controllers\PeriodsController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/periods\/delete\/{period}","name":"registration.periods.delete","action":"Modules\Registration\Http\Controllers\PeriodsController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/periods\/delete-bulk\/{year}","name":"registration.periods.delete-bulk","action":"Modules\Registration\Http\Controllers\PeriodsController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"registration\/periods\/store\/{year}","name":"registration.periods.store","action":"Modules\Registration\Http\Controllers\PeriodsController@store"},{"host":null,"methods":["POST"],"uri":"registration\/periods\/update\/{period}","name":"registration.periods.update","action":"Modules\Registration\Http\Controllers\PeriodsController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/notes\/{step}","name":"registration.notes.index","action":"Modules\Registration\Http\Controllers\NotesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/notes\/create\/{step}","name":"registration.notes.create","action":"Modules\Registration\Http\Controllers\NotesController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/notes\/edit\/{note}","name":"registration.notes.edit","action":"Modules\Registration\Http\Controllers\NotesController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/notes\/show\/{note}","name":"registration.notes.show","action":"Modules\Registration\Http\Controllers\NotesController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/notes\/delete\/{note}","name":"registration.notes.delete","action":"Modules\Registration\Http\Controllers\NotesController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/notes\/delete-bulk\/{step}","name":"registration.notes.delete-bulk","action":"Modules\Registration\Http\Controllers\NotesController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"registration\/notes\/store\/{step}","name":"registration.notes.store","action":"Modules\Registration\Http\Controllers\NotesController@store"},{"host":null,"methods":["POST"],"uri":"registration\/notes\/update\/{note}","name":"registration.notes.update","action":"Modules\Registration\Http\Controllers\NotesController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/registrar","name":"registration.registrar.index","action":"Modules\Registration\Http\Controllers\RegistrarController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"registration\/registrar\/apply","name":"registration.registrar.apply","action":"Modules\Registration\Http\Controllers\RegistrarController@apply"},{"host":null,"methods":["GET","HEAD"],"uri":"subject","name":"subject.index","action":"Modules\Subject\Http\Controllers\LessonsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"subject\/create_lesson","name":"subject.create_lesson","action":"Modules\Subject\Http\Controllers\LessonsController@create_lesson"},{"host":null,"methods":["POST"],"uri":"subject\/store_lesson","name":"subject.store_lesson","action":"Modules\Subject\Http\Controllers\LessonsController@store_lesson"},{"host":null,"methods":["GET","HEAD"],"uri":"subject\/edit_lesson\/{lesson}","name":"subject.edit_lesson","action":"Modules\Subject\Http\Controllers\LessonsController@edit_lesson"},{"host":null,"methods":["POST"],"uri":"subject\/update_lesson\/{lesson}","name":"subject.update_lesson","action":"Modules\Subject\Http\Controllers\LessonsController@update_lesson"},{"host":null,"methods":["GET","HEAD"],"uri":"subject\/delete_lesson\/{lesson}","name":"subject.delete_lesson","action":"Modules\Subject\Http\Controllers\LessonsController@delete_lesson"},{"host":null,"methods":["GET","HEAD"],"uri":"subject\/element\/{lessonid}","name":"subject.element","action":"Modules\Subject\Http\Controllers\ElementsController@element"},{"host":null,"methods":["GET","HEAD"],"uri":"subject\/create_element","name":"subject.create_element","action":"Modules\Subject\Http\Controllers\ElementsController@create_element"},{"host":null,"methods":["POST"],"uri":"subject\/store_element","name":"subject.store_element","action":"Modules\Subject\Http\Controllers\ElementsController@store_element"},{"host":null,"methods":["GET","HEAD"],"uri":"subject\/edit_element\/{element}","name":"subject.edit_element","action":"Modules\Subject\Http\Controllers\ElementsController@edit_element"},{"host":null,"methods":["POST"],"uri":"subject\/update_element\/{element}","name":"subject.update_element","action":"Modules\Subject\Http\Controllers\ElementsController@update_element"},{"host":null,"methods":["GET","HEAD"],"uri":"subject\/delete_element\/{element}","name":"subject.delete_element","action":"Modules\Subject\Http\Controllers\ElementsController@delete_element"},{"host":null,"methods":["GET","HEAD"],"uri":"lists","name":"lists.index","action":"Modules\Lists\Http\Controllers\ListsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/countries","name":"countries.index","action":"Modules\Lists\Http\Controllers\CountriesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/countries\/create","name":"countries.create","action":"Modules\Lists\Http\Controllers\CountriesController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/countries\/edit\/{lCountry}","name":"countries.edit","action":"Modules\Lists\Http\Controllers\CountriesController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/countries\/show\/{lCountry}","name":"countries.show","action":"Modules\Lists\Http\Controllers\CountriesController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/countries\/delete\/{lCountry}","name":"countries.delete","action":"Modules\Lists\Http\Controllers\CountriesController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/countries\/delete-bulk","name":"countries.delete-bulk","action":"Modules\Lists\Http\Controllers\CountriesController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"lists\/countries\/store","name":"countries.store","action":"Modules\Lists\Http\Controllers\CountriesController@store"},{"host":null,"methods":["POST"],"uri":"lists\/countries\/update\/{lCountry}","name":"countries.update","action":"Modules\Lists\Http\Controllers\CountriesController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/cities\/{lCountry}","name":"cities.index","action":"Modules\Lists\Http\Controllers\CitiesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/cities\/create\/{lCountry}","name":"cities.create","action":"Modules\Lists\Http\Controllers\CitiesController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/cities\/edit\/{lCity}","name":"cities.edit","action":"Modules\Lists\Http\Controllers\CitiesController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/cities\/show\/{lCity}","name":"cities.show","action":"Modules\Lists\Http\Controllers\CitiesController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/cities\/delete\/{lCity}","name":"cities.delete","action":"Modules\Lists\Http\Controllers\CitiesController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/cities\/delete-bulk\/{lCountry}","name":"cities.delete-bulk","action":"Modules\Lists\Http\Controllers\CitiesController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"lists\/cities\/store\/{lCountry}","name":"cities.store","action":"Modules\Lists\Http\Controllers\CitiesController@store"},{"host":null,"methods":["POST"],"uri":"lists\/cities\/update\/{lCity}","name":"cities.update","action":"Modules\Lists\Http\Controllers\CitiesController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/states\/{lCity}","name":"states.index","action":"Modules\Lists\Http\Controllers\StatesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/states\/create\/{lCity}","name":"states.create","action":"Modules\Lists\Http\Controllers\StatesController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/states\/edit\/{lState}","name":"states.edit","action":"Modules\Lists\Http\Controllers\StatesController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/states\/show\/{lState}","name":"states.show","action":"Modules\Lists\Http\Controllers\StatesController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/states\/delete\/{lState}","name":"states.delete","action":"Modules\Lists\Http\Controllers\StatesController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/states\/delete-bulk\/{lCity}","name":"states.delete-bulk","action":"Modules\Lists\Http\Controllers\StatesController@deleteBulk"},{"host":null,"methods":["POST"],"uri":"lists\/states\/store\/{lCity}","name":"states.store","action":"Modules\Lists\Http\Controllers\StatesController@store"},{"host":null,"methods":["POST"],"uri":"lists\/states\/update\/{lState}","name":"states.update","action":"Modules\Lists\Http\Controllers\StatesController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/api\/cities","name":"lists.api.cities.index","action":"Modules\Lists\Http\Controllers\Api\CitiesController@index@index"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/api\/cities\/create","name":"lists.api.cities.create","action":"Modules\Lists\Http\Controllers\Api\CitiesController@index@create"},{"host":null,"methods":["POST"],"uri":"lists\/api\/cities","name":"lists.api.cities.store","action":"Modules\Lists\Http\Controllers\Api\CitiesController@index@store"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/api\/cities\/{cities}","name":"lists.api.cities.show","action":"Modules\Lists\Http\Controllers\Api\CitiesController@index@show"},{"host":null,"methods":["GET","HEAD"],"uri":"lists\/api\/cities\/{cities}\/edit","name":"lists.api.cities.edit","action":"Modules\Lists\Http\Controllers\Api\CitiesController@index@edit"},{"host":null,"methods":["PUT"],"uri":"lists\/api\/cities\/{cities}","name":"lists.api.cities.update","action":"Modules\Lists\Http\Controllers\Api\CitiesController@index@update"},{"host":null,"methods":["PATCH"],"uri":"lists\/api\/cities\/{cities}","name":null,"action":"Modules\Lists\Http\Controllers\Api\CitiesController@index@update"},{"host":null,"methods":["DELETE"],"uri":"lists\/api\/cities\/{cities}","name":"lists.api.cities.destroy","action":"Modules\Lists\Http\Controllers\Api\CitiesController@index@destroy"}],

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                return this.getCorrectUrl(uri + qs);
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = '/' + uri.replace(/^\/?/, '');

                if(!this.absolute)
                    return url;

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

