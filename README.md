# rks-jen-pen-mgh

[![Join the chat at https://gitter.im/rks-jen-pen-mgh/Lobby](https://badges.gitter.im/rks-jen-pen-mgh/Lobby.svg)](https://gitter.im/rks-jen-pen-mgh/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/rks-jen-pen-mgh/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rks-jen-pen-mgh/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/rks-jen-pen-mgh/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rks-jen-pen-mgh/build-status/master)

Rasio Ketersediaan Sekolah (RKS) Jenjang Pendidikan Menengah

## install via composer

- Development snapshot
```bash
$ composer require bantenprov/rks-jen-pen-mgh:dev-master
```
- Latest release:

```bash
$ composer require bantenprov/rks-jen-pen-mgh:v0.1.0
```

## download via github
~~~
bash
$ git clone https://github.com/bantenprov/rks-jen-pen-mgh.git
~~~


#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\RKSJenPenMgh\RKSJenPenMghServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=rks-jen-pen-mgh-assets
$ php artisan vendor:publish --tag=rks-jen-pen-mgh-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/rks-jen-pen-mgh',
    components: {
      main: resolve => require(['./components/views/bantenprov/rks-jen-pen-mgh/DashboardRKSJenPenMgh.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "RKS Jenjang Pendidikan Menengah"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
      path: '/admin/dashboard/rks-jen-pen-mgh',
      components: {
        main: resolve => require(['./components/bantenprov/rks-jen-pen-mgh/RKSJenPenMghAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "RKS Jenjang Pendidikan Menengah"
      }
    }
 //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'RKS Jenjang Pendidikan Menengah',
          link: '/dashboard/rks-jen-pen-mgh',
          icon: 'fa fa-angle-double-right'
        }
  ]
},

```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import RKSJenPenMgh from './components/bantenprov/rks-jen-pen-mgh/RKSJenPenMgh.chart.vue';
Vue.component('echarts-rks-jen-pen-mgh', RKSJenPenMgh);

import RKSJenPenMghKota from './components/bantenprov/rks-jen-pen-mgh/RKSJenPenMghKota.chart.vue';
Vue.component('echarts-rks-jen-pen-mgh-kota', RKSJenPenMghKota);

import RKSJenPenMghTahun from './components/bantenprov/rks-jen-pen-mgh/RKSJenPenMghTahun.chart.vue';
Vue.component('echarts-rks-jen-pen-mgh-tahun', RKSJenPenMghTahun);

import RKSJenPenMghAdminShow from './components/bantenprov/rks-jen-pen-mgh/RKSJenPenMghAdmin.show.vue';
Vue.component('admin-view-rks-jen-pen-mgh-tahun', RKSJenPenMghAdminShow);

//== Echarts Angka Partisipasi Kasar

import RKSJenPenMghBar01 from './components/views/bantenprov/rks-jen-pen-mgh/RKSJenPenMghBar01.vue';
Vue.component('rks-jen-pen-mgh-bar-01', RKSJenPenMghBar01);

import RKSJenPenMghBar02 from './components/views/bantenprov/rks-jen-pen-mgh/RKSJenPenMghBar02.vue';
Vue.component('rks-jen-pen-mgh-bar-02', RKSJenPenMghBar02);

//== mini bar charts
import RKSJenPenMghBar03 from './components/views/bantenprov/rks-jen-pen-mgh/RKSJenPenMghBar03.vue';
Vue.component('rks-jen-pen-mgh-bar-03', RKSJenPenMghBar03);

import RKSJenPenMghPie01 from './components/views/bantenprov/rks-jen-pen-mgh/RKSJenPenMghPie01.vue';
Vue.component('rks-jen-pen-mgh-pie-01', RKSJenPenMghPie01);

import RKSJenPenMghPie02 from './components/views/bantenprov/rks-jen-pen-mgh/RKSJenPenMghPie02.vue';
Vue.component('rks-jen-pen-mgh-pie-02', RKSJenPenMghPie02);

//== mini pie charts
import RKSJenPenMghPie03 from './components/views/bantenprov/rks-jen-pen-mgh/RKSJenPenMghPie03.vue';
Vue.component('rks-jen-pen-mgh-pie-03', RKSJenPenMghPie03);
```

