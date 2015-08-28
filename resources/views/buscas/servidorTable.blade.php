        <table class='table'>
            <thead>
                <td>CPF</td>
                <td>Nome Completo</td>
                <td>Nome Guerra</td>
                <td>Matrícula</td>
            </thead>
            <tbody>
                @foreach($servidores as $servidor)
                    <tr>
                        <td>
                            {!! link_to_route('doServidorPorCpf', $servidor['cpf'], ['cpf' => $servidor['cpf']]) !!}
                        </td>
                        <td>{{ $servidor['nomeCompleto'] }}</td>
                        <td>{{ $servidor['nomeGuerra'] or "(não tem nome de guerra)" }}</td>
                        <td>{{ $servidor['matricula'] or "(não tem matrícula)" }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
