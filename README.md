<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# 🛒 Sistema de Abarrotes — Laravel

Aplicación web desarrollada en **Laravel** para la administración de tiendas de abarrotes, enfocada en el control de ventas, inventario y gestión de productos de forma eficiente.

---

## 🚀 Descripción

El **Sistema de Abarrotes** es una solución pensada para pequeños y medianos negocios que necesitan llevar un control organizado de sus operaciones diarias.

Permite gestionar productos, registrar ventas, controlar el inventario y generar reportes, todo desde una interfaz web intuitiva y segura.

---

## 🎯 Características principales

* 📦 **Gestión de productos**

  * Registro, edición y eliminación
  * Clasificación por categorías
  * Control de precios

* 🧾 **Ventas**

  * Registro rápido de ventas
  * Cálculo automático de totales
  * Historial de ventas

* 📊 **Inventario**

  * Control de stock en tiempo real
  * Actualización automática al vender
  * Alertas de productos bajos

* 👤 **Usuarios y roles**

  * Administrador
  * Cajero
  * Control de accesos

* 💰 **Caja**

  * Control de ingresos diarios
  * Registro de movimientos

* 📈 **Reportes**

  * Ventas por fecha
  * Productos más vendidos
  * Resumen financiero básico

* 🔐 **Autenticación**

  * Login seguro
  * Protección de rutas con middleware

---

## 🛠️ Tecnologías utilizadas

* 🧠 Laravel (PHP)
* 🎨 Blade, HTML5, CSS3, JavaScript
* 🗄️ MySQL
* ⚙️ Eloquent ORM
* 🔐 Sistema de autenticación de Laravel

---

## 📂 Estructura del proyecto

```bash id="l8m3pn"
app/
│
├── Models/
├── Http/
│   ├── Controllers/
│   └── Middleware/
│
resources/
├── views/
│   └── layouts/
│
routes/
│   └── web.php
│
database/
│   ├── migrations/
│   └── seeders/
│
public/
└── README.md
```

---

## ⚙️ Instalación

1. Clonar el repositorio:

```bash id="t7y2ka"
git clone https://github.com/isairey/sistema-abarrotes-laravel.git
```

2. Acceder al proyecto:

```bash id="c3v9op"
cd sistema-abarrotes-laravel
```

3. Instalar dependencias:

```bash id="g1r6dz"
composer install
npm install
```

4. Configurar entorno:

```bash id="u4k8bw"
cp .env.example .env
php artisan key:generate
```

5. Configurar base de datos en `.env`

6. Ejecutar migraciones:

```bash id="q2x5jm"
php artisan migrate --seed
```

7. Ejecutar servidor:

```bash id="n9h1se"
php artisan serve
```

8. Acceder en navegador:

```bash id="w6p3lc"
http://localhost:8000
```

---

## 🧪 Uso del sistema

1. Iniciar sesión
2. Registrar productos
3. Gestionar inventario
4. Realizar ventas
5. Consultar reportes

---

## 📈 Objetivo del proyecto

Brindar una herramienta digital eficiente para mejorar la administración de tiendas de abarrotes, facilitando el control de ventas, inventario y operaciones comerciales.

---

## 🔮 Mejoras futuras

* Integración con lector de código de barras
* Facturación electrónica
* Sistema de proveedores
* Reportes gráficos avanzados
* API REST para integración con apps móviles

---

## 👨‍💻 Autor

**Isai Reyes**
Desarrollador de sistemas web y soluciones empresariales 🚀

---

## 📜 Licencia

Proyecto de uso libre para fines educativos y comerciales.

