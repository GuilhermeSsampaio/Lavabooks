<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="css/estilo.css" rel="stylesheet" type="text/css" /> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/estilo.css">
    <title>Currículo</title>
</head>
@include('site.layouts._partials.cabecalho')

<header>
    <div class="box titulo">

        <div>
            <p id="vitae" class="uppercase  ">Curriculum vitae</p>
            <h1 class="uppercase azul-claro ">Guilherme Silva Sampaio</h1>
            <p class="uppercase ">Técnico em informática para internet</p>
        </div>

    </div>

</header>
<hr>
<section class='box'>
    <div>
        <h2 class="uppercase azul-claro borda-secoes">Objetivos</h2>
        <p class="texto">Formado no IFMS campus Dourados, como técnico de informática para internet, e almejando cursar
            sistemas de informação na UFGD. Sou uma pessoa responsável e flexível e busco uma experiência no mercado de
            desenvolvimento web</p>
        <h2 class="uppercase azul-claro borda-secoes">Estudos</h2>

        <div class="texto">
            <p>Ensino Fundamental – CEART Centro Educacional Antônio Raposo Tavares (Dourados/MS) 2010 - 2019</p>
            <p>Ensino Médio - Técnico integrado em informática para internet – IFMS Campus Dourados – 2020 -2022
            </p>
            <p>
                PIBIC – EM - Iniciação científica júnior em letras na UFGD (Dourados/MS) – 2020 (em curso)</p>
        </div>
        <h2 class="uppercase azul-claro borda-secoes">Experiência</h2>
        <div class="texto">
            <p>
                PIBIC –EM -Iniciação científica júnior em letras na UFGD (Dourados/MS) –2020-2021
            </p>
            <p>
                PIBIC –EM -Iniciação científica júnior em matemáticana UFGD (Dourados/MS) –2021-2022 </p>
            <p>
                Estagiário no laboratório IF Maker do IFMS campus Dourados –Março 2022→Julho 2022 </p>

        </div>
        <h2 class="uppercase azul-claro borda-secoes">Projetos</h2>
        <div>
            <p>
                Criação de um programa em python para o cálculo mensal da conta de energia e seu desconto de acordo com
                a bandeira tarifária, fazendo o usode funções modulares–IC,UFGD (2022) </p>
            <p>
                Desenvolvimento de um portal de notícias para a AgetranEstágio, IFMS (2022) <p>

        </div>

        <h2 class="uppercase azul-claro borda-secoes">Idiomas</h2>
        <div class="texto">
            <p> - Português </p>
            <p> - Inglês intermediário (SEDA College Online)</p>

        </div>

        <h2 class="uppercase azul-claro borda-secoes">Prêmios</h2>
        <div class="texto">
            <p>- 3° Lugar na categoria de poesia do Festival de Arte e cultura do IFMS Campus Dourados (Festace) em 2018
            </p>
            <p>- Certificado de aluno destaque no 8° ano com média 9.3 em 2018 pela escola CEART</p>
            <p>- Certificado de aluno destaque no 9° ano com média 9.6 em 2019 pela escola CEART</p>
        </div>
        <h2 class="uppercase azul-claro borda-secoes">Conhecimentos na área de informática</h2>

        <div class="texto">
            <p> - HTML</p>
            <p> - CSS</p>
            <p> - JAVASCRIPT</p>
            <p> - SQL </p>
            <p> - PHP</p>
            <p> - MONGODB</p>
            <p> - REACT.JS</p>
            <p> - NEXT.JS</p>
            <p> - LARAVEL</p>
        </div>

    </div>

    <div class="foto flex colum">
        <img id="foto-perfil" src="img/perfil.jpg" alt="foto de perfil">
        <div class='links'>
            <div class='flex links borda-links'>
                <div>
                    <a href="https://www.google.com.br/maps/place/R.+Milton+Rocha,+10+-+Cohafaba+II+Plano,+Dourados+-+MS"
                        target="about_blank"><img src="img/endereco.png"></a>
                </div>
                <div>
                    <a class="links-texto"
                        href="https://www.google.com.br/maps/place/R.+Milton+Rocha,+10+-+Cohafaba+II+Plano,+Dourados+-+MS"
                        target="about_blank">Rua Milton Rocha, 10, BNH 2° Plano </a>
                </div>
            </div>
            <div class='links'>
                <div class='flex links borda-links'>
                    <div>
                        <a href="tel:+556798194-2502">
                            <img src="img/telefone.png"></a>
                    </div>
                    <div>
                        <a class="links-texto" href="tel:+556798194-2502">(67) 98194-2502 </a>
                    </div>
                </div>
                <div class='links'>
                    <div class='flex links borda-links'>
                        <div>
                            <a href="mailto:guilhermessampaio20@gmail.com" target="about_blank"><img
                                    src="img/email.png"></a>
                        </div>
                        <div>
                            <a class="links-texto"
                                href="mailto:guilhermessampaio20@gmail.com">guilhermessampaio20@gmail.com</a>
                        </div>
                    </div>
                    <div class='links'>
                        <div class='flex links borda-links'>
                            <div>
                                <a href="https://github.com/GuilhermeSsampaio?tab=repositories"
                                    target="about_blank"><img src="img/git.png"></a>
                            </div>
                            <div>
                                <a class="links-texto" href="https://github.com/GuilhermeSsampaio?tab=repositories"
                                    target="about_blank">Repositórios GitHub </a>
                            </div>
                        </div>
                        <div class='links'>
                            <div class='flex links borda-links'>
                                <div>
                                    <a href="https://www.linkedin.com/in/guilherme-sampaio-5360601a5/"
                                        target="about_blank"><img src="img/linkedin.png"></a>
                                </div>
                                <div>
                                    <a class="links-texto"
                                        href="https://www.linkedin.com/in/guilherme-sampaio-5360601a5/"
                                        target="about_blank">linkedin</a>
                                </div>
                            </div>
                        </div>
                    </div>

</section>

@include('site.layouts._partials.rodape')
</body>

</html>
