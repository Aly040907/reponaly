<html>
    <body>
        <h1>Lista Alunos</h1>
        @error('erro')
            <div>{{$message}}</div>
        @enderror
        <br>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </body>
</html>