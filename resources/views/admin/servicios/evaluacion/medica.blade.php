<div class="row mt-3">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-estrecha">
            <thead>
                <tr>
                    <th width='15%'>EVALUACIÓN</th>
                    <th width='60%'>CONCLUSIÓN</th>
                    <th width='20%'>RESULTADO</th>
                    <th width='5%'></th>
                </tr>
            </thead>
            <tbody>
                @can('admin.medica.index')
                @if(kvfa($examenes,'1'))
                <tr>
                    <th class="align-middle">Médica</th>
                    <td class="align-middle">{{ str_replace('.<br />',', ',nl2br($detservicio->examedico->recomendaciones)) }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->examedico->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.examedico',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                            <i class="fas fa-stethoscope"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                @can('admin.psico.index')
                @if(kvfa($examenes,'5'))
                <tr>
                    <th class="align-middle">Psicológica</th>
                    <td class="align-middle">{{ $detservicio->exapsico->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exapsico->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exapsico',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Evaluación Psicológica">
                            <i class="fab fa-creative-commons-by"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                @can('admin.oftalmo.index')
                @if(kvfa($examenes,'3'))
                <tr>
                    <th class="align-middle">Oftalmológica</th>
                    <td class="align-middle">{{ $detservicio->exaoftalmo->recomendaciones }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaoftalmo->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaoftalmo',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Evaluación Oftalmológica">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @endif                    
                @endcan
                @can('admin.odonto.index')
                @if(kvfa($examenes,'4'))
                <tr>
                    <th class="align-middle">Odontológico</th>
                    <td class="align-middle">{{ $detservicio->exaodonto->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaodonto->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaodonto',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Evaluación Odontológica">
                            <i class="fas fa-tooth"></i>
                        </a>
                    </td>
                </tr>
                @endif                    
                @endcan
                @can('admin.radio.index')
                @if(kvfa($examenes,'9'))
                <tr>
                    <th class="align-middle">Radiográfico</th>
                    <td class="align-middle">{{ $detservicio->exaradio->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaradio->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaradio',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Radiografia de Torax">
                            <i class="fas fa-radiation-alt"></i>
                        </a>
                    </td>
                </tr>
                @endif                    
                @endcan
                @can('admin.espiro.index')
                @if(kvfa($examenes,'8'))
                <tr>
                    <th class="align-middle">Espirometría</th>
                    <td class="align-middle">{{ $detservicio->exaespiro->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaespiro->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaespiro',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Espirometría">
                            <i class="fas fa-lungs"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                @can('admin.audio.index')
                @if(kvfa($examenes,'8'))
                <tr>
                    <th class="align-middle">Audiometría</th>
                    <td class="align-middle">{{ $detservicio->exaaudio->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaaudio->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaaudio',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Evaluación Audiológica">
                            <i class="far fa-bell"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                @can('admin.ekg.index')
                @if(kvfa($examenes,'6'))
                <tr>
                    <th class="align-middle">Electrocardiograma</th>
                    <td class="align-middle">{{ $detservicio->exaekg->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaekg->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaekg',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Electrocardiograma">
                            <i class="fas fa-heartbeat"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                @can('admin.derma.index')
                @if(kvfa($examenes,'6'))
                <tr>
                    <th class="align-middle">Dermatológico</th>
                    <td class="align-middle">{{ $detservicio->exaderma->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaderma->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaderma',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Evaluación Dermatológica">
                            <i class="fas fa-fingerprint"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                @can('admin.altura18.index')
                @if(kvfa($examenes,'10'))
                <tr>
                    <th class="align-middle">Altura 1.8m</th>
                    <td class="align-middle">{{ $detservicio->exaalt18->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaalt18->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaalt18',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Trabajo Altura 1.8m">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                @can('admin.altura25.index')
                @if(kvfa($examenes,'11'))
                <tr>
                    <th class="align-middle">Altura 2500msnm</th>
                    <td class="align-middle">{{ $detservicio->exaalt25->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaalt25->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaalt25',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Trabajo Altura 2,500msnm">
                            <i class="fas fa-level-up-alt"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                @can('admin.confinado.index')
                @if(kvfa($examenes,'12'))
                <tr>
                    <th class="align-middle">Espacio Confinado</th>
                    <td class="align-middle">{{ $detservicio->exaconfinado->conclusion }}</td>
                    <td class="align-middle">{{ $resultado[$detservicio->exaconfinado->resultado] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exaconfinado',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Evaluación Espacios Confinados">
                            <i class="fas fa-arrows-alt"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endcan
                {{-- @if(kvfa($examenes,'13'))
                <tr>
                    <th class="align-middle">Covid19 - Antígeno</th>
                    <td class="align-middle">COVID-19 - PRUEBA ANTÍGENO </td>
                    <td class="align-middle">{{ $detservicio->exacovidant->antigeno==1?'POSITIVO':'NEGATIVO' }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exacovid',$detservicio->exacovidant) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Prueba Antígeno | Covid-19">
                            <i class="fas fa-virus"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @if(kvfa($examenes,'14'))
                <tr>
                    <th class="align-middle">Covid19 - PR</th>
                    <td class="align-middle">
                        COVID-19 - PRUEBA RÁPIDA:
                        <strong>IgG: </strong>{{ $detservicio->exacovidpr->igg==1?'REACTIVO':'NO REACTIVO' }}
                        <strong> / IgM: </strong>{{ $detservicio->exacovidpr->igm==1?'REACTIVO':'NO REACTIVO' }}                                                
                    </td>
                    <td class="align-middle">{{ $detservicio->exacovidpr->igm==1?'POSITIVO':'NEGATIVO' }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exacovid',$detservicio->exacovidpr) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Prueba Rápida | Covid-19">
                            <i class="fas fa-viruses"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @if(kvfa($examenes,'15'))
                <tr>
                    <th class="align-middle">Covid19 - PCR</th>
                    <td class="align-middle">COVID-19 - PCR </td>
                    <td class="align-middle">{{ $detservicio->exacovidpcr->pcr==1?'POSITIVO':'NEGATIVO' }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exacovid',$detservicio->exacovidpcr) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Prueba PCR | Covid-19">
                            <i class="fas fa-lungs-virus"></i>
                        </a>
                    </td>
                </tr>
                @endif --}}
            </tbody>
        </table>
    </div>
</div>