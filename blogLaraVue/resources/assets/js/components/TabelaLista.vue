<template>
        <div>
         <a href="#" type="button" class="btn btn-primary">Criar</a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th v-for="titulo in titulos" :key="titulo.id">{{titulo}}</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >1</td>
                        <td>Fullstack Developer</td>
                        <td>Desenvolvimento de Software com Laravel e VueJs</td>
                        <td>Eduardo Developer</td>
                        <td>07/11/2018</td>
                        <td><a href="#" type="button" class="btn btn-warning">Editar</a>
                            <a href="#" type="button" class="btn btn-danger">Deletar</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Fullstack Developer</td>
                        <td>Desenvolvimento de Software com Laravel e VueJs</td>
                        <td>Eduardo Developer</td>
                        <td>07/11/2018</td>
                        <td><a href="#" type="button" class="btn btn-warning">Editar</a>
                            <a href="#" type="button" class="btn btn-danger">Deletar</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fullstack Developer</td>
                        <td>Desenvolvimento de Software com Laravel e VueJs</td>
                        <td>Eduardo Developer</td>
                        <td>07/11/2018</td>
                        <td><a href="#" type="button" class="btn btn-warning">Editar</a>
                            <a href="#" type="button" class="btn btn-danger">Deletar</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Fullstack Developer</td>
                        <td>Desenvolvimento de Software com Laravel e VueJs</td>
                        <td>Eduardo Developer</td>
                        <td>07/11/2018</td>
                        <td><a href="#" type="button" class="btn btn-warning">Editar</a>
                            <a href="#" type="button" class="btn btn-danger">Deletar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
</template>

<script>
export default {
  props: ["titulos"]
};
</script>
