let tipo;
let unidad;
let pagina = 1;

document.addEventListener('DOMContentLoaded',function(){
    iniciarApp();
    
});

function iniciarApp(){
    carrousel();
    eventListeners();
    cambiarSeccion();
    fechaCita();
    horaCita();
    deshabilitarFechaAnterior();
    ocultarFieldsetsFormularioInmueble();
    formatoPrecios();
    enlacesInmuebles();
}
// funcion para poder utilizar el icono de menu movil y poder ver las opciones del navegador
// APROBADO
function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
    if(mobileMenu){
      mobileMenu.addEventListener('click',navegacionResponsive);
    }
    
}
//funcion que permite ocultar o mostrar las opciones
// APROBADO
function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');
    
    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }
    else{
        navegacion.classList.add('mostrar');
    }
}

// //genera las clases necesarias para que se generen los carrouseles en el INDEX y las paginas individuales
// // APROBADO
function carrousel(){
    const seleccion = document.getElementById('C-seleccion');
    const index = document.getElementById('index');
    if(seleccion){
        new Glider(seleccion,{
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: '#indicadores-seleccion',
            arrows: {
                prev: '#anterior-seleccion',
                next: '#siguiente-seleccion'},
            responsive: [
                {
                  // screens greater than >= 775px
                  breakpoint: 740,
                  settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToShow: 2,
                    slidesToScroll: 2,
                  }
                },{
                  // screens greater than >= 1024px
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                  }
                }
              ]
        });
    }
    const servicios = document.getElementById('C-servicios');
    if(servicios){
        new Glider(servicios,{
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: '#indicadores4',
            arrows: {
                prev: '#anterior4',
                next: '#siguiente4'},
            responsive: [
                {
                  // screens greater than >= 775px
                  breakpoint: 740,
                  settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToShow: 2,
                    slidesToScroll: 2,
                  }
                },{
                  // screens greater than >= 1024px
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                  }
                }
              ]
        });
    }
    if(index){
        new Glider(document.getElementById('C-inmuebles'),{
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: '#indicadores1',
            arrows: {
                prev: '#anterior1',
                next: '#siguiente1'},
            responsive: [
                {
                  // screens greater than >= 775px
                  breakpoint: 740,
                  settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToShow: 3,
                    slidesToScroll: 3,
                  }
                },{
                  // screens greater than >= 1024px
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                  }
                }
              ]
                
        });
    
        new Glider(document.getElementById('C-departamentos'),{
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: '#indicadores2',
            arrows: {
                prev: '#anterior2',
                next: '#siguiente2'},
            responsive: [
                {
                  // screens greater than >= 775px
                  breakpoint: 740,
                  settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToShow: 3,
                    slidesToScroll: 3,
                  }
                },{
                  // screens greater than >= 1024px
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                  }
                }
              ]
                
        });
    
        new Glider(document.getElementById('C-terrenos'),{
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: '#indicadores3',
            arrows: {
                prev: '#anterior3',
                next: '#siguiente3'},
            responsive: [
                {
                  // screens greater than >= 775px
                  breakpoint: 740,
                  settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToShow: 3,
                    slidesToScroll: 3,
                  }
                },{
                  // screens greater than >= 1024px
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                  }
                }
              ]  
        });
    }
    
}

function cambiarSeccion() {
const enlaces = document.querySelectorAll('.tabs button');

enlaces.forEach( enlace => {
    enlace.addEventListener('click', e => {
        e.preventDefault();
        pagina = parseInt(e.target.dataset.paso);

        // Llamar la función de mostrar sección
        mostrarSeccion();
    })
})
}

function mostrarSeccion() {

// Eliminar mostrar-seccion de la sección anterior
const seccionAnterior = document.querySelector('.mostrar-seccion');
if( seccionAnterior ) {
    seccionAnterior.classList.remove('mostrar-seccion');
}

const seccionActual = document.querySelector(`#paso-${pagina}`);
seccionActual.classList.add('mostrar-seccion');

// Eliminar la clase de actual en el tab anterior
const tabAnterior = document.querySelector('.tabs .actual');
if(tabAnterior) {
    tabAnterior.classList.remove('actual');
}

// Resalta el Tab Actual
const tab = document.querySelector(`[data-paso="${pagina}"]`);
tab.classList.add('actual');
}


function ConfirmDelete(){
  var respuesta = confirm("¿Esta seguro que desea eliminar el registro?");
  if (respuesta == true) {
    return true;
  }
  else{
    return false;
  }
}

function fechaCita() {
  const fechaInput = document.querySelector('#fecha');
  const campoFecha = document.querySelector('#campo-fecha');
  if(fechaInput){
    fechaInput.addEventListener('input', e => {
  
        const dia = new Date(e.target.value).getUTCDay();
        
        if([0, 6].includes(dia)) {
            e.preventDefault();
            fechaInput.value = '';
            mostrarAlerta('Fines de Semana no son permitidos', 'error',campoFecha);
        } 
        // else {
        //     cita.fecha = fechaInput.value;
  
        //     console.log(cita);
        // }
    })
  }
}

function deshabilitarFechaAnterior() {
  const inputFecha = document.querySelector('#fecha');
  if(inputFecha){
    const fechaAhora = new Date();
    const year = fechaAhora.getFullYear();
    const mes = fechaAhora.getMonth() + 1;


    if(mes < 10){
        var _mes = "0" + mes;
    }
    else{
      var _mes = mes;
    }

    const dia = fechaAhora.getDate() + 1;
    if(dia < 10){
      var _dia = "0" + dia;
      console.log(_dia);
    }
    else{
      var _dia = dia;
    }

    const fechaDeshabilitar = `${year}-${_mes}-${_dia}`;

    console.log(fechaDeshabilitar);
    inputFecha.setAttribute('min',fechaDeshabilitar);
  }

  
}

function horaCita() {
  const inputHora = document.querySelector('#hora');
  const campoHora = document.querySelector('#campo-hora');
  if(inputHora){
    inputHora.addEventListener('input', e => {
  
        const horaCita = e.target.value;
        const hora = horaCita.split(':');
  
        if(hora[0] < 10 || hora[0] > 18 ) {
            mostrarAlerta('Hora no válida', 'error',campoHora);
            setTimeout(() => {
                inputHora.value = '';
            }, 3000);
        } 
        // else {
        //     cita.hora = horaCita;
  
        //     console.log(cita);
        // }
    });
  }
}

function mostrarAlerta(mensaje, tipo, posicion) {

  // Si hay una alerta previa, entonces no crear otra
  const alertaPrevia = document.querySelector('.alerta');
  if(alertaPrevia) {
      return;
  }

  const alerta = document.createElement('DIV');
  alerta.textContent = mensaje;
  alerta.classList.add('alerta');

  if(tipo === 'error') {
      alerta.classList.add('error');
  }

  // Insertar en el HTML
  // const formulario = document.querySelector('.formulario');
  posicion.appendChild( alerta );

  // Eliminar la alerta después de 3 segundos
  setTimeout(() => {
      alerta.remove();
  }, 1800);
}


function ocultarFieldsetsFormularioInmueble(){
  const formularioCreate = document.querySelector('#formulario-propiedad-create');
  const formularioUpdate = document.querySelector('#formulario-propiedad-update');

  const fieldSetStatus = document.querySelector('#fieldSetStatus');
  const fieldSetRemodelacion = document.querySelector('#fieldSetRemodelacion');
  const fieldSetDescripcionPropiedad = document.querySelector('#fieldSetDescripcionPropiedad');
  const fieldSetPrecio = document.querySelector('#fieldSetPrecio');
  const fieldSetDepartamento = document.querySelector('#fieldSetDepartamento');
  const fieldSetComision = document.querySelector('#fieldSetComision');
  const fieldSetMueblesAmenidades = document.querySelector('#fieldSetMueblesAmenidades');
  const fieldSetPredio = document.querySelector('#fieldSetPredio');

  if(fieldSetStatus){
    fieldSetStatus.classList.add('ocultar');
  }
  if(fieldSetRemodelacion){
    fieldSetRemodelacion.classList.add('ocultar');
  }
  if(fieldSetDescripcionPropiedad){
    fieldSetDescripcionPropiedad.classList.add('ocultar');
  }
  if(fieldSetPrecio){
    fieldSetPrecio.classList.add('ocultar');
  }
  if(fieldSetDepartamento){
    fieldSetDepartamento.classList.add('ocultar');
  }
  if(fieldSetComision){
    fieldSetComision.classList.add('ocultar');
  }
  if(fieldSetMueblesAmenidades){
    fieldSetMueblesAmenidades.classList.add('ocultar');
  }
  if(fieldSetPredio){
    fieldSetPredio.classList.add('ocultar');
  }
  

  if(formularioUpdate || formularioCreate){
    const tipoPropiedad = document.querySelector('#tipoPropiedad');
    switch (tipoPropiedad.selectedIndex) {
      case 1:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.remove('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.add('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.remove('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 2:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.remove('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.remove('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.remove('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 3:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.add('ocultar');
        fieldSetDescripcionPropiedad.classList.add('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.add('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.add('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 4:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.add('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.remove('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.add('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 5:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.remove('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.add('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.remove('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 6:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.remove('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.remove('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.remove('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
    
      default:
        break;
    }
    tipoPropiedad.addEventListener('change',()=>{
      switch (tipoPropiedad.selectedIndex) {
        case 1:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.remove('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.add('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.remove('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 2:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.remove('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.remove('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.remove('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 3:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.add('ocultar');
        fieldSetDescripcionPropiedad.classList.add('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.add('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.add('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 4:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.add('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.remove('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.add('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 5:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.remove('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.add('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.remove('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      case 6:
        fieldSetStatus.classList.remove('ocultar');
        fieldSetRemodelacion.classList.remove('ocultar');
        fieldSetDescripcionPropiedad.classList.remove('ocultar');
        fieldSetPrecio.classList.remove('ocultar');
        fieldSetDepartamento.classList.remove('ocultar');
        fieldSetComision.classList.remove('ocultar');
        fieldSetMueblesAmenidades.classList.remove('ocultar');
        fieldSetPredio.classList.remove('ocultar');
      break;
      
        default:
          break;
      }
    });
  }
}

function formatoPrecios(){
  const precios = document.querySelectorAll(".precio");

  precios.forEach(element => {
    element.textContent = "$ "+parseInt(element.textContent).toLocaleString('en-US');
  });

}

var mostrar = true;

function enlacesInmuebles(){
  const spanInmuebles = document.querySelector('#span-inmuebles');
  const enlacesInmuebles = document.querySelector('#enlaces-inmuebles');

  if(spanInmuebles){
    spanInmuebles.addEventListener('click',()=>{
      if(mostrar){
        enlacesInmuebles.classList.add('mostrar-enlaces');
        mostrar = false;
      }
      else{
        enlacesInmuebles.classList.remove('mostrar-enlaces');
        mostrar = true;
      }
    });

  }
}
/* @preserve
    _____ __ _     __                _
   / ___// /(_)___/ /___  ____      (_)___
  / (_ // // // _  // -_)/ __/_    / /(_-<
  \___//_//_/ \_,_/ \__//_/  (_)__/ //___/
                              |___/

  Version: 1.7.3
  Author: Nick Piscitelli (pickykneee)
  Website: https://nickpiscitelli.com
  Documentation: http://nickpiscitelli.github.io/Glider.js
  License: MIT License
  Release Date: October 25th, 2018

*/

/* global define */

(function (factory) {
  typeof define === 'function' && define.amd
    ? define(factory)
    : typeof exports === 'object'
      ? (module.exports = factory())
      : factory()
})(function () {
  ('use strict') // eslint-disable-line no-unused-expressions

  /* globals window:true */
  var _window = typeof window !== 'undefined' ? window : this

  var Glider = (_window.Glider = function (element, settings) {
    var _ = this

    if (element._glider) return element._glider

    _.ele = element
    _.ele.classList.add('glider')

    // expose glider object to its DOM element
    _.ele._glider = _

    // merge user setting with defaults
    _.opt = Object.assign(
      {},
      {
        slidesToScroll: 1,
        slidesToShow: 1,
        resizeLock: true,
        duration: 0.5,
        // easeInQuad
        easing: function (x, t, b, c, d) {
          return c * (t /= d) * t + b
        }
      },
      settings
    )

    // set defaults
    _.animate_id = _.page = _.slide = 0
    _.arrows = {}

    // preserve original options to
    // extend breakpoint settings
    _._opt = _.opt

    if (_.opt.skipTrack) {
      // first and only child is the track
      _.track = _.ele.children[0]
    } else {
      // create track and wrap slides
      _.track = document.createElement('div')
      _.ele.appendChild(_.track)
      while (_.ele.children.length !== 1) {
        _.track.appendChild(_.ele.children[0])
      }
    }

    _.track.classList.add('glider-track')

    // start glider
    _.init()

    // set events
    _.resize = _.init.bind(_, true)
    _.event(_.ele, 'add', {
      scroll: _.updateControls.bind(_)
    })
    _.event(_window, 'add', {
      resize: _.resize
    })
  })

  var gliderPrototype = Glider.prototype
  gliderPrototype.init = function (refresh, paging) {
    var _ = this

    var width = 0

    var height = 0

    _.slides = _.track.children;

    [].forEach.call(_.slides, function (_) {
      _.classList.add('glider-slide')
    })

    _.containerWidth = _.ele.clientWidth

    var breakpointChanged = _.settingsBreakpoint()
    if (!paging) paging = breakpointChanged

    if (
      _.opt.slidesToShow === 'auto' ||
      typeof _.opt._autoSlide !== 'undefined'
    ) {
      var slideCount = _.containerWidth / _.opt.itemWidth

      _.opt._autoSlide = _.opt.slidesToShow = _.opt.exactWidth
        ? slideCount
        : Math.floor(slideCount)
    }
    if (_.opt.slidesToScroll === 'auto') {
      _.opt.slidesToScroll = Math.floor(_.opt.slidesToShow)
    }

    _.itemWidth = _.opt.exactWidth
      ? _.opt.itemWidth
      : _.containerWidth / _.opt.slidesToShow;

    // set slide dimensions
    [].forEach.call(_.slides, function (__) {
      __.style.height = 'auto'
      __.style.width = _.itemWidth + 'px'
      width += _.itemWidth
      height = Math.max(__.offsetHeight, height)
    })

    _.track.style.width = width + 'px'
    _.trackWidth = width
    _.isDrag = false
    _.preventClick = false

    _.opt.resizeLock && _.scrollTo(_.slide * _.itemWidth, 0)

    if (breakpointChanged || paging) {
      _.bindArrows()
      _.buildDots()
      _.bindDrag()
    }

    _.updateControls()

    _.emit(refresh ? 'refresh' : 'loaded')
  }

  gliderPrototype.bindDrag = function () {
    var _ = this
    _.mouse = _.mouse || _.handleMouse.bind(_)

    var mouseup = function () {
      _.mouseDown = undefined
      _.ele.classList.remove('drag')
      if (_.isDrag) {
        _.preventClick = true
      }
      _.isDrag = false
    }

    var events = {
      mouseup: mouseup,
      mouseleave: mouseup,
      mousedown: function (e) {
        e.preventDefault()
        e.stopPropagation()
        _.mouseDown = e.clientX
        _.ele.classList.add('drag')
      },
      mousemove: _.mouse,
      click: function (e) {
        if (_.preventClick) {
          e.preventDefault()
          e.stopPropagation()
        }
        _.preventClick = false
      }
    }

    _.ele.classList.toggle('draggable', _.opt.draggable === true)
    _.event(_.ele, 'remove', events)
    if (_.opt.draggable) _.event(_.ele, 'add', events)
  }

  gliderPrototype.buildDots = function () {
    var _ = this

    if (!_.opt.dots) {
      if (_.dots) _.dots.innerHTML = ''
      return
    }

    if (typeof _.opt.dots === 'string') {
      _.dots = document.querySelector(_.opt.dots)
    } else _.dots = _.opt.dots
    if (!_.dots) return

    _.dots.innerHTML = ''
    _.dots.classList.add('glider-dots')

    for (var i = 0; i < Math.ceil(_.slides.length / _.opt.slidesToShow); ++i) {
      var dot = document.createElement('button')
      dot.dataset.index = i
      dot.setAttribute('aria-label', 'Page ' + (i + 1))
      dot.className = 'glider-dot ' + (i ? '' : 'active')
      _.event(dot, 'add', {
        click: _.scrollItem.bind(_, i, true)
      })
      _.dots.appendChild(dot)
    }
  }

  gliderPrototype.bindArrows = function () {
    var _ = this
    if (!_.opt.arrows) {
      Object.keys(_.arrows).forEach(function (direction) {
        var element = _.arrows[direction]
        _.event(element, 'remove', { click: element._func })
      })
      return
    }
    ['prev', 'next'].forEach(function (direction) {
      var arrow = _.opt.arrows[direction]
      if (arrow) {
        if (typeof arrow === 'string') arrow = document.querySelector(arrow)
        arrow._func = arrow._func || _.scrollItem.bind(_, direction)
        _.event(arrow, 'remove', {
          click: arrow._func
        })
        _.event(arrow, 'add', {
          click: arrow._func
        })
        _.arrows[direction] = arrow
      }
    })
  }

  gliderPrototype.updateControls = function (event) {
    var _ = this

    if (event && !_.opt.scrollPropagate) {
      event.stopPropagation()
    }

    var disableArrows = _.containerWidth >= _.trackWidth

    if (!_.opt.rewind) {
      if (_.arrows.prev) {
        _.arrows.prev.classList.toggle(
          'disabled',
          _.ele.scrollLeft <= 0 || disableArrows
        )
      }
      if (_.arrows.next) {
        _.arrows.next.classList.toggle(
          'disabled',
          Math.ceil(_.ele.scrollLeft + _.containerWidth) >=
            Math.floor(_.trackWidth) || disableArrows
        )
      }
    }

    _.slide = Math.round(_.ele.scrollLeft / _.itemWidth)
    _.page = Math.round(_.ele.scrollLeft / _.containerWidth)

    var middle = _.slide + Math.floor(Math.floor(_.opt.slidesToShow) / 2)

    var extraMiddle = Math.floor(_.opt.slidesToShow) % 2 ? 0 : middle + 1
    if (Math.floor(_.opt.slidesToShow) === 1) {
      extraMiddle = 0
    }

    // the last page may be less than one half of a normal page width so
    // the page is rounded down. when at the end, force the page to turn
    if (_.ele.scrollLeft + _.containerWidth >= Math.floor(_.trackWidth)) {
      _.page = _.dots ? _.dots.children.length - 1 : 0
    }

    [].forEach.call(_.slides, function (slide, index) {
      var slideClasses = slide.classList

      var wasVisible = slideClasses.contains('visible')

      var start = _.ele.scrollLeft

      var end = _.ele.scrollLeft + _.containerWidth

      var itemStart = _.itemWidth * index

      var itemEnd = itemStart + _.itemWidth;

      [].forEach.call(slideClasses, function (className) {
        /^left|right/.test(className) && slideClasses.remove(className)
      })
      slideClasses.toggle('active', _.slide === index)
      if (middle === index || (extraMiddle && extraMiddle === index)) {
        slideClasses.add('center')
      } else {
        slideClasses.remove('center')
        slideClasses.add(
          [
            index < middle ? 'left' : 'right',
            Math.abs(index - (index < middle ? middle : extraMiddle || middle))
          ].join('-')
        )
      }

      var isVisible =
        Math.ceil(itemStart) >= start && Math.floor(itemEnd) <= end
      slideClasses.toggle('visible', isVisible)
      if (isVisible !== wasVisible) {
        _.emit('slide-' + (isVisible ? 'visible' : 'hidden'), {
          slide: index
        })
      }
    })
    if (_.dots) {
      [].forEach.call(_.dots.children, function (dot, index) {
        dot.classList.toggle('active', _.page === index)
      })
    }

    if (event && _.opt.scrollLock) {
      clearTimeout(_.scrollLock)
      _.scrollLock = setTimeout(function () {
        clearTimeout(_.scrollLock)
        // dont attempt to scroll less than a pixel fraction - causes looping
        if (Math.abs(_.ele.scrollLeft / _.itemWidth - _.slide) > 0.02) {
          if (!_.mouseDown) {
            _.scrollItem(_.round(_.ele.scrollLeft / _.itemWidth))
          }
        }
      }, _.opt.scrollLockDelay || 250)
    }
  }

  gliderPrototype.scrollItem = function (slide, dot, e) {
    if (e) e.preventDefault()

    var _ = this

    var originalSlide = slide
    ++_.animate_id

    if (dot === true) {
      slide = slide * _.containerWidth
      slide = Math.round(slide / _.itemWidth) * _.itemWidth
    } else {
      if (typeof slide === 'string') {
        var backwards = slide === 'prev'

        // use precise location if fractional slides are on
        if (_.opt.slidesToScroll % 1 || _.opt.slidesToShow % 1) {
          slide = _.round(_.ele.scrollLeft / _.itemWidth)
        } else {
          slide = _.slide
        }

        if (backwards) slide -= _.opt.slidesToScroll
        else slide += _.opt.slidesToScroll

        if (_.opt.rewind) {
          var scrollLeft = _.ele.scrollLeft
          slide =
            backwards && !scrollLeft
              ? _.slides.length
              : !backwards &&
                scrollLeft + _.containerWidth >= Math.floor(_.trackWidth)
                ? 0
                : slide
        }
      }

      slide = Math.max(Math.min(slide, _.slides.length), 0)

      _.slide = slide
      slide = _.itemWidth * slide
    }

    _.scrollTo(
      slide,
      _.opt.duration * Math.abs(_.ele.scrollLeft - slide),
      function () {
        _.updateControls()
        _.emit('animated', {
          value: originalSlide,
          type:
            typeof originalSlide === 'string' ? 'arrow' : dot ? 'dot' : 'slide'
        })
      }
    )

    return false
  }

  gliderPrototype.settingsBreakpoint = function () {
    var _ = this

    var resp = _._opt.responsive

    if (resp) {
      // Sort the breakpoints in mobile first order
      resp.sort(function (a, b) {
        return b.breakpoint - a.breakpoint
      })

      for (var i = 0; i < resp.length; ++i) {
        var size = resp[i]
        if (_window.innerWidth >= size.breakpoint) {
          if (_.breakpoint !== size.breakpoint) {
            _.opt = Object.assign({}, _._opt, size.settings)
            _.breakpoint = size.breakpoint
            return true
          }
          return false
        }
      }
    }
    // set back to defaults in case they were overriden
    var breakpointChanged = _.breakpoint !== 0
    _.opt = Object.assign({}, _._opt)
    _.breakpoint = 0
    return breakpointChanged
  }

  gliderPrototype.scrollTo = function (scrollTarget, scrollDuration, callback) {
    var _ = this

    var start = new Date().getTime()

    var animateIndex = _.animate_id

    var animate = function () {
      var now = new Date().getTime() - start
      _.ele.scrollLeft =
        _.ele.scrollLeft +
        (scrollTarget - _.ele.scrollLeft) *
          _.opt.easing(0, now, 0, 1, scrollDuration)
      if (now < scrollDuration && animateIndex === _.animate_id) {
        _window.requestAnimationFrame(animate)
      } else {
        _.ele.scrollLeft = scrollTarget
        callback && callback.call(_)
      }
    }

    _window.requestAnimationFrame(animate)
  }

  gliderPrototype.removeItem = function (index) {
    var _ = this

    if (_.slides.length) {
      _.track.removeChild(_.slides[index])
      _.refresh(true)
      _.emit('remove')
    }
  }

  gliderPrototype.addItem = function (ele) {
    var _ = this

    _.track.appendChild(ele)
    _.refresh(true)
    _.emit('add')
  }

  gliderPrototype.handleMouse = function (e) {
    var _ = this
    if (_.mouseDown) {
      _.isDrag = true
      _.ele.scrollLeft +=
        (_.mouseDown - e.clientX) * (_.opt.dragVelocity || 3.3)
      _.mouseDown = e.clientX
    }
  }

  // used to round to the nearest 0.XX fraction
  gliderPrototype.round = function (double) {
    var _ = this
    var step = _.opt.slidesToScroll % 1 || 1
    var inv = 1.0 / step
    return Math.round(double * inv) / inv
  }

  gliderPrototype.refresh = function (paging) {
    var _ = this
    _.init(true, paging)
  }

  gliderPrototype.setOption = function (opt, global) {
    var _ = this

    if (_.breakpoint && !global) {
      _._opt.responsive.forEach(function (v) {
        if (v.breakpoint === _.breakpoint) {
          v.settings = Object.assign({}, v.settings, opt)
        }
      })
    } else {
      _._opt = Object.assign({}, _._opt, opt)
    }

    _.breakpoint = 0
    _.settingsBreakpoint()
  }

  gliderPrototype.destroy = function () {
    var _ = this

    var replace = _.ele.cloneNode(true)

    var clear = function (ele) {
      ele.removeAttribute('style');
      [].forEach.call(ele.classList, function (className) {
        /^glider/.test(className) && ele.classList.remove(className)
      })
    }
    // remove track
    replace.children[0].outerHTML = replace.children[0].innerHTML
    clear(replace);
    [].forEach.call(replace.getElementsByTagName('*'), clear)
    _.ele.parentNode.replaceChild(replace, _.ele)
    _.event(_window, 'remove', {
      resize: _.resize
    })
    _.emit('destroy')
  }

  gliderPrototype.emit = function (name, arg) {
    var _ = this

    var e = new _window.CustomEvent('glider-' + name, {
      bubbles: !_.opt.eventPropagate,
      detail: arg
    })
    _.ele.dispatchEvent(e)
  }

  gliderPrototype.event = function (ele, type, args) {
    var eventHandler = ele[type + 'EventListener'].bind(ele)
    Object.keys(args).forEach(function (k) {
      eventHandler(k, args[k])
    })
  }

  return Glider
})

/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-webp-setclasses !*/
 !function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);