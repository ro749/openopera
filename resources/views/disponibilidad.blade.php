@php
if(isset($init_unit)) {
    $unit = $init_unit;
    $unit->price = $unit->precio;
}
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @push('styles')
    <style>
        .table {
            border-color: #00000055 !important;
        }
    </style>
    @endpush
    @include('head')
    <body>
        @include('header')
        <div class="responsive-row">
            <div style="width:40%;">
                @if(isset($imp))
                <div id="image-map-pro-tower"></div>
                @else
                <img src="https://opera.propstudios.mx/Images/Fachada/{{ $init_unit->nivel }}.jpg">
                @endif
            </div>
            <div style="width:60%;">
                <div class="floor-cover no-phone" style="display:flex; align-items: center; justify-content: center; height:100%;">
                    <img style="width:50%;" src="https://opera.propstudios.mx/Images/Opera Dorado.png" alt="">
                </div>
                <div class="floor" style="display:flex; flex-direction: column; height:100%;">
                    <div class="responsive-row" style="justify-content: end;">
                        <div class="unit-area" style="width:50%; margin-top:24px; display:none;">
                            <div class="floor-content" style="margin-left:36px;">
                                <h1 style="font-size: 2.5rem !important;"><b>Unidad <x-f-text id="unidad" :unit="$init_unit"></x-f-text></b></h1>
                                <div style="">
                                    <div class="icono-container">
                                        <img class="icono" src="https://opera.propstudios.mx/Images/IconosCaracteristicas/Interior.png">
                                        <span>INTERIOR: </span><x-f-text id="interior" :unit="$init_unit"></x-f-text><span>M²</span>
                                    </div>
                                    <div class="icono-container">
                                        <img class="icono" src="https://opera.propstudios.mx/Images/IconosCaracteristicas/Exterior.png">
                                        <span>EXTERIOR: </span><x-f-text id="exterior" :unit="$init_unit"></x-f-text><span>M²</span>
                                    </div>
                                    <div class="icono-container">
                                        <img class="icono" src="https://opera.propstudios.mx/Images/IconosCaracteristicas/Total.png">
                                        <span>TOTAL: </span><x-f-text id="total" :unit="$init_unit"></x-f-text><span>M²</span>
                                    </div>
                                    <div class="icono-container">
                                        <img class="icono" src="https://opera.propstudios.mx/Images/IconosCaracteristicas/Recámaras.png">
                                        <span>RECÁMARAS: </span><x-f-text id="recamaras" :unit="$init_unit"></x-f-text>
                                    </div>
                                    <div class="icono-container">
                                        <img class="icono" src="https://opera.propstudios.mx/Images/IconosCaracteristicas/Baños.png">
                                        <span>BAÑOS: </span><x-f-text id="baños" :unit="$init_unit"></x-f-text>
                                    </div>
                                    <x-f-conditional :unit="$init_unit" id="estacionamiento">
                                    <div class="icono-container">
                                        <img class="icono" src="https://opera.propstudios.mx/Images/IconosCaracteristicas/Estacionamientos.png">
                                        <span>ESTACIONAMIENTOS: </span><x-f-text id="estacionamiento" :unit="$init_unit"></x-f-text>
                                        
                                    </div>
                                    </x-f-conditional>
                                    <x-f-conditional :unit="$init_unit" id="cuartoDeServicio">
                                    <div class="icono-container" id="servicio">
                                        <img class="icono" src="https://opera.propstudios.mx/Images/IconosCaracteristicas/Servicio.png">
                                        <span>CUARTO DE SERVICIO: </span><x-f-text id="cuartoDeServicio" :unit="$init_unit"></x-f-text>
                                    </div>
                                    </x-f-conditional>
                                </div>
                            </div>
                        </div>
                        <div style="width:50%">
                            @if(isset($imp))
                            <div id="image-map-pro-floor"></div>
                            @else
                            <img src="https://opera.propstudios.mx/Images/Ubicaciones/Planta/{{ $init_unit->nivel }}.png">
                            @endif
                        </div>
                    </div>
                    <div style="flex-grow: 1; position: relative;">
                        <x-f-image style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); height: 100%; object-fit: cover;" :unit="$init_unit" id="planta" data="tipo" src="https://opera.propstudios.mx/Images/Modelos/Planta/" ext=".jpg" ></x-f-image>
                    </div>
                </div>
                
            </div>
        </div>
        <div id="plans" style="display:none; background-color: #681a0e;">
        @include('listing-utils::Plans.plans',['plans'=>$plans])
        </div>
        <img class="no-phone" src="https://opera.propstudios.mx/Images/Escritorio/Torre.jpg" style="width:100%;">
        <img class="just-phone" src="https://opera.propstudios.mx/Images/Movil/Torre 01.jpg" style="width:100%;">
        <img class="just-phone" src="https://opera.propstudios.mx/Images/Movil/Torre 02.jpg" style="width:100%;">
        <div class="col-lg-8" style="width: 100% !important">
            <div class="owl-carousel owl-theme owl-single-dots" style="width: 100% !important">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_2_1.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_2_2.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_2_3.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_2_4.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_2_5.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_2_6.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_7_1.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_7_2.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_7_3.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_7_4.jpg">
                <img style="width: 100% !important"  src="https://opera.propstudios.mx/Images/Slides/Departamentos/Normales (1-8)/R-Tipo_7_5.jpg">
            </div>
        </div>
        <img class="no-phone" src="https://opera.propstudios.mx/Images/Escritorio/Mapa.jpg" style="width:100%;">
        <img class="no-phone" src="https://opera.propstudios.mx/Images/Escritorio/Patrimonio.jpg" style="width:100%;">
        <img class="just-phone" src="https://opera.propstudios.mx/Images/Movil/Mapa.jpg" style="width:100%;">
        <img class="just-phone" src="https://opera.propstudios.mx/Images/Movil/Patrimonio.jpg" style="width:100%;">
        <x-smartForm :form="$form" style="margin: 1rem; margin-top:3rem; display: flex; flex-direction: column; gap: 1rem; align-items: center;">
            <div><p style="font-size: 3rem;"><b>Contactanos</b></p></div>
            <x-field name="name" :form="$form"/>
            <div style="display:flex; flex-direction:row; gap: 1rem; width: 100%;">
                <x-field name="email" :form="$form"/>
                <x-field name="phone" :form="$form"/>
            </div>
            <x-field name="unit" :form="$form"/>
            <x-field name="message" :form="$form"/>
            <button class="btn btn-light" @click="submit">
                {{ $form->submit_text }}
            </button>
        </x-smartForm>
    </body>
    @include('scripts')
</html>
