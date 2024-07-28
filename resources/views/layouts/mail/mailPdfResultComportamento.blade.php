<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Perfil Comportamental</title>
</head>
<body>
    <div style="max-width:100vw;font-family:Arial, Helvetica, sans-serif;padding:20px;line-height:1.5;letter-spacing:0.6px;background-color:#fff;color:#000;">

    <div style="width:100%;display:flex;flex-direction:column;align-items:center;">
        <img src="https://archetypefy.com.br/wp-content/webp-express/webp-images/uploads/2024/06/LOGO_Prancheta-1-1024x1024.png.webp" width="100" />
    </div>

    <div style="width:100%;font-size:16px;text-align:justify;color:#000;">
        Olá, {{ session('fullName') }}, Parabéns por completar o seu teste, agora você esta pronto(a) para começar a caminhar na direção certa.
    </div>

    <div style="width:100%;margin:20px 0;font-size:16px;align-items:center;color:#000;">
        Segue o resultado de seus comportamentos:

        <!-- @if(is_array(session('output')))
            <div>
                @foreach(session('output') as $key => $value)
                    @if(!empty($value))  <!- Check to avoid displaying empty values ->
                        {{ $value }}<br>
                    @endif
                @endforeach
            </div>
        @else
            <div>No data available.</div>
        @endif -->

        @if(is_array(session('output')))
            <div class="listaResultComportamentos">
                @foreach(session('output') as $item)
                    @if(!empty($item))
                        <div style="margin:10px 0;">
                            <ul>
                                <li>
                                    {{ $item }}
                                </li>
                            </ul>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <div>{{ session('output') }}</div>
        @endif
    </div>

    <div style="width:100%;font-size:15px;text-align:justify;color:#000;">
        Entenda melhor cada comportamento abaixo:

        <div>
            <h2>Comunicador</h2>
            <strong>Pontos Fortes:</strong>
            <ol>
                <li>Excelente em construir relacionamentos.</li>
                <li>Persuasivo e influente.</li>
                <li>Entusiasta e otimista.</li>
                <li>Extrovertido e sociável.</li>
                <li>Ótimo em motivar e inspirar os outros.</li>
                <li>Adaptável e flexível.</li>
                <li>Comunicador eficaz.</li>
                <li>Criativo e inovador.</li>
                <li>Bom em resolver conflitos.</li>
                <li>Energético e dinâmico.</li>
            </ol>

            <strong>Pontos a Desenvolver:</strong>
            <ol>
                <li>Melhorar a organização e gestão do tempo.</li>
                <li>Desenvolver a escuta ativa.</li>
                <li>Atenção aos detalhes.</li>
                <li>Consistência no cumprimento de compromissos.</li>
                <li>Resiliência a críticas e rejeições.</li>
                <li>Melhorar a concentração em tarefas longas.</li>
                <li>Aprender a dizer "não" quando necessário.</li>
                <li>Focar em metas a longo prazo.</li>
                <li>Desenvolver habilidades de planejamento.</li>
                <li>Controlar a impulsividade.</li>
            </ol>

            <strong>Frases de Impacto:</strong>
            <ul>
                <li>"A comunicação é a chave para o sucesso."</li>
                <li>"Inspire e motive os outros a alcançarem seu melhor."</li>
                <li>"Cada interação é uma oportunidade de fazer a diferença."</li>
            </ul>

            <strong>Exemplos Práticos:</strong>
            <ol>
                <li><strong>Relacionamentos:</strong> Organizar eventos de team building para fortalecer a coesão da equipe.</li>
                <li><strong>Persuasão:</strong> Conduzir apresentações eficazes para convencer clientes ou stakeholders.</li>
                <li><strong>Motivação:</strong> Usar histórias inspiradoras para motivar a equipe durante reuniões.</li>
            </ol>
        </div>


            <h2>Analítico</h2>
            <strong>Pontos Fortes:</strong>
            <ol>
                <li>Lógico e metódico.</li>
                <li>Detalhista e preciso.</li>
                <li>Baseado em dados e fatos.</li>
                <li>Alta qualidade no trabalho.</li>
                <li>Bom em resolver problemas complexos.</li>
                <li>Tomador de decisões bem-informado.</li>
                <li>Organizado e estruturado.</li>
                <li>Consistente e confiável.</li>
                <li>Bom em análise crítica.</li>
                <li>Persistente na busca pela perfeição.</li>
            </ol>

            <strong>Pontos a Desenvolver:</strong>
            <ol>
                <li>Melhorar habilidades de comunicação.</li>
                <li>Tomar decisões mais rapidamente.</li>
                <li>Ser mais flexível e aberto a novas ideias.</li>
                <li>Delegar tarefas e confiar nos outros.</li>
                <li>Evitar a paralisia por análise.</li>
                <li>Lidar melhor com a incerteza.</li>
                <li>Desenvolver habilidades interpessoais.</li>
                <li>Ser mais proativo.</li>
                <li>Adaptar-se a mudanças inesperadas.</li>
                <li>Equilibrar análise com ação.</li>
            </ol>

            <strong>Frases de Impacto:</strong>
            <ul>
                <li>"A precisão nos leva à perfeição."</li>
                <li>"Os dados são o coração da decisão informada."</li>
                <li>"A lógica é o caminho para a clareza."</li>
            </ul>

            <strong>Exemplos Práticos:</strong>
            <ul>
                <li><strong>Análise de Dados:</strong> Realizar análises detalhadas para identificar tendências de mercado.</li>
                <li><strong>Resolução de Problemas:</strong> Desenvolver soluções baseadas em dados para desafios complexos.</li>
                <li><strong>Qualidade:</strong> Implementar processos de controle de qualidade rigorosos.</li>
            </ul>

            <h2>Executor</h2>
            <strong>Pontos Fortes:</strong>
            <ol>
                <li>Orientado para resultados.</li>
                <li>Decisivo e direto.</li>
                <li>Gosta de desafios.</li>
                <li>Confiante e assertivo.</li>
                <li>Proativo e dinâmico.</li>
                <li>Focado em ação.</li>
                <li>Bom em assumir responsabilidades.</li>
                <li>Persistente e resiliente.</li>
                <li>Habilidade em tomar decisões rápidas.</li>
                <li>Capacidade de lidar com pressão.</li>
            </ol>

            <strong>Pontos a Desenvolver:</strong>
            <ol>
                <li>Melhorar a paciência.</li>
                <li>Desenvolver empatia.</li>
                <li>Delegar tarefas e confiar na equipe.</li>
                <li>Colaborar e trabalhar em equipe.</li>
                <li>Controlar a tendência a ser autoritário.</li>
                <li>Escutar ativamente.</li>
                <li>Ser mais flexível.</li>
                <li>Considerar os sentimentos dos outros.</li>
                <li>Aprender a lidar com conflitos de maneira construtiva.</li>
                <li>Equilibrar ação com planejamento.</li>
            </ol>

            <strong>Frases de Impacto:</strong>
            <ul>
                <li>"Ação é a chave para o sucesso."</li>
                <li>"Desafios são oportunidades disfarçadas."</li>
                <li>"Decisões rápidas, resultados rápidos."</li>
            </ul>

            <strong>Exemplos Práticos:</strong>
            <ul>
                <li><strong>Resultados:</strong> Definir metas claras e trabalhar consistentemente para alcançá-las.</li>
                <li><strong>Decisões:</strong> Tomar decisões rápidas em situações de alta pressão.</li>
                <li><strong>Desafios:</strong> Assumir projetos desafiadores e liderar a equipe para a conclusão.</li>
            </ul>

            <h2>Planejador</h2>
            <strong>Pontos Fortes:</strong>
            <ol>
                <li>Estruturado e organizado.</li>
                <li>Bom em planejar e coordenar.</li>
                <li>Prefere ambientes previsíveis.</li>
                <li>Paciente e detalhista.</li>
                <li>Consistente e confiável.</li>
                <li>Habilidade em criar processos eficientes.</li>
                <li>Excelente em gestão de projetos.</li>
                <li>Capacidade de antecipar problemas.</li>
                <li>Metódico na abordagem de tarefas.</li>
                <li>Valoriza a ordem e a rotina.</li>
            </ol>

            <strong>Pontos a Desenvolver:</strong>
            <ol>
                <li>Ser mais flexível e aberto a mudanças.</li>
                <li>Tomar decisões rápidas quando necessário.</li>
                <li>Desenvolver proatividade.</li>
                <li>Lidar com conflitos de maneira eficaz.</li>
                <li>Equilibrar planejamento com a necessidade de ação.</li>
                <li>Adaptar-se a situações inesperadas.</li>
                <li>Ser mais inovador e criativo.</li>
                <li>Melhorar habilidades de comunicação.</li>
                <li>Trabalhar sob pressão.</li>
                <li>Delegar tarefas de maneira eficaz.</li>
            </ol>

            <strong>Frases de Impacto:</strong>
            <ul>
                <li>"O planejamento é a base do sucesso."</li>
                <li>"A ordem traz clareza e eficiência."</li>
                <li>"Antecipar problemas é a chave para a prevenção."</li>
            </ul>

            <strong>Exemplos Práticos:</strong>
            <ul>
                <li><strong>Planejamento:</strong> Criar cronogramas detalhados para projetos e garantir que todas as etapas sejam cumpridas.</li>
                <li><strong>Coordenação:</strong> Coordenar recursos e pessoas para garantir a execução eficiente dos planos.</li>
                <li><strong>Antecipação:</strong> Identificar e mitigar riscos potenciais antes que eles afetem o projeto.</li>
            </ul>

            Essas análises e exemplos práticos podem ajudá-lo a entender melhor seus pontos fortes e áreas para desenvolvimento, além de fornecer inspiração para aplicar essas características em sua vida diária e profissional.
        </div>
    </div>

    </div>
</body>
</html>
