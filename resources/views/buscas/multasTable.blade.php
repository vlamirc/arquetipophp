        <table class='table'>
            <thead>
                <td>Data / Hora</td>
                <td>Número Auto</td>
                <td>Placa</td>
                <td>Enquadramento</td>
            </thead>
            <tbody>
                @foreach($multas as $multa)
                    <tr>
                        <td>
                            {{ date('d/m/Y H:i', $multa['dataHoraInfracao']/1000) }}
                        </td>
                        <td>
                            {!! link_to_route('doMultaDetalhes', $multa['numeroAuto'], ['numeroAuto' => $multa['numeroAuto']]) !!}
                        </td>
                        <td>
                            {!! link_to_route('doVeiculosPorPlaca', $multa['placa'], ['placa' => $multa['placa']]) !!}
                        </td>
                        <td>
                            {{ isset($multa['enquadramentoInfracao']) ? $multa['enquadramentoInfracao'] : '-' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
