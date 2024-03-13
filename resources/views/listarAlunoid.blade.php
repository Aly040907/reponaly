<html>
    <body>
        <h1>Visualizar Aluno</h1>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th>Curso</th>

                </tr>
            </thead>
            <tbody>
             
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->data_nascimento }}</td>
                    <td>{{ $aluno->curso }}</td>
                </tr> 
          
            </tbody>
        </table>
    </body>
</html>