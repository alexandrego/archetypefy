<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Identidade de Temperamentos</title>
</head>
<body>
    <div style="max-width:100vw;font-family:Arial, Helvetica, sans-serif;padding:20px;line-height:1.5;letter-spacing:0.6px;background-color:#fff;color:#000;">

    <div style="width:100%;display:flex;flex-direction:column;align-items:center;">
        <img src="https://archetypefy.online/src/assets/img/logo-png.png" width="100" />
    </div>

    <div style="width:100%;font-size:16px;text-align:justify;color:#000;">
            Olá, {{ session('fullName') }}, Parabéns por completar o seu teste, agora você esta pronto(a) para começar a caminhar na direção certa.
    </div>

    <div style="width:100%;margin:20px 0;font-size:16px;align-items:center;color:#000;">
            Seu principal temperamento é: <span style="font-size:18px"><strong>{{ session('resultadoFinalTemper') }}</strong>
    </div>

    <div style="width:100%;font-size:15px;text-align:justify;color:#000;">
        @if(session('resultadoFinalTemper') == 'Fleumático')
            <p>
                O Temperamento {{session('resultadoFinalTemper')}} descreve uma pessoa que é calma, confiável e diplomática. Valorizando a harmonia e a estabilidade, é um mediador natural e excelente ouvinte. Prefere ambientes tranquilos e é eficiente em resolver conflitos e promover a cooperação entre os outros.
            </p>
            <p>
                Fisicamente, os fleumáticos têm um porte mais relaxado, muitas vezes com uma postura que demonstra tranquilidade e confiança. São conhecidos por sua paciência e capacidade de manter a calma em situações estressantes.
            </p>
            <strong>Frases de Impacto Positivo: </strong>
            <ol>
                <li>"A paz é a chave para a harmonia."</li>
                <li>"A diplomacia constrói pontes."</li>
                <li>"A calma é o alicerce da sabedoria."</li>
                <li>"A cooperação supera qualquer desafio."</li>
                <li>"A estabilidade é a base do sucesso duradouro."</li>
                <li>"O respeito e a compreensão criam vínculos fortes."</li>
                <li>"A verdadeira força está na serenidade."</li>
                <li>"Cada pessoa tem valor e merece ser ouvida."</li>
                <li>"A harmonia gera produtividade."</li>
                <li>"A paciência é uma virtude poderosa."</li>
            </ol>

            <strong>Estratégias de Comunicação: </strong>
            <ul>
                <li>Empatia e Respeito: Use uma comunicação gentil e respeitosa para criar conexões genuínas.</li>
                <li>Resolução de Conflitos: Ofereça conselhos sobre mediação e resolução pacífica de conflitos.</li>
                <li>Simbolismo de Paz: Utilize símbolos como a pomba e cores suaves, como azul e verde.</li>
                <li>Histórias Inspiradoras: Compartilhe histórias de cooperação e sucesso em equipe.</li>
                <li>Atualizações sobre Bem-estar: Mantenha o público informado sobre práticas de bem-estar e equilíbrio emocional.</li>
            </ul>

            <strong>Exemplos Práticos: </strong>
            <ol>
                <li>Guia de Mediação: Desenvolva guias práticos para resolução de conflitos de forma pacífica.</li>
                <li>Ferramentas de Comunicação: Revise e recomende ferramentas que melhoram a comunicação e a cooperação.</li>
                <li>Histórias de Empatia: Publique artigos e vídeos contando histórias de mediação bem-sucedida.</li>
                <li>Eventos de Bem-estar: Organize eventos focados em técnicas de relaxamento e bem-estar emocional.</li>
                <li>Workshops de Comunicação: Realize workshops para desenvolver habilidades de comunicação empática e escuta ativa.</li>
            </ol>

            <strong>Funil de Vendas: </strong>
            <ul>
                <li><strong>Topo de Funil:</strong> Atraia potenciais mediadores com conteúdo sobre resolução de conflitos e técnicas de comunicação.</li>
                <li><strong>Meio de Funil:</strong> Eduque sobre estratégias de mediação eficaz, oferecendo cursos e ferramentas de comunicação.</li>
                <li><strong>Fundo de Funil:</strong> Feche vendas com programas de coaching personalizados e workshops exclusivos para mediadores.</li>
            </ul>

            <strong>Exemplo de Cenário para Fotos: </strong>
            <p>
                <strong>Localização:</strong> Ambientes tranquilos, jardins, salas de meditação ou reuniões harmoniosas.
            </p>

            <strong>Pontos fortes: </strong>
            <ul>
                <li>Calma e estabilidade</li>
                <li>Habilidade em mediação </li>
                <li>Comunicação empática</li>
            </ul>

            <strong>Pontos a desenvolver: </strong>
            <ul>
                <li>Assertividade</li>
                <li>Tomada de decisão rápida</li>
                <li>Iniciativa em situações novas</li>
            </ul>

            <strong>Como Lidar com um Fleumático: </strong>
            <ul>
                <li>Seja gentil e paciente: Fleumáticos respondem bem à calma e ao respeito.</li>
                <li>Encoraje a expressão de sentimentos: Incentive-o a compartilhar seus pensamentos e emoções.</li>
                <li>Promova um ambiente harmonioso: Valorize a cooperação e a paz no relacionamento.</li>
            </ul>

            <p>
                Cada temperamento tem suas próprias características físicas, comportamentais e maneiras únicas de se relacionar com o mundo, tornando essencial a compreensão e a adaptação das interações para construir relacionamentos mais fortes e produtivos. Com as estratégias e exemplos fornecidos, você estará bem com orientações para lidar eficazmente com cada temperamento e maximizar seu potencial em diversas situações.
            </p>

        @elseif(session('resultadoFinalTemper') == 'Sanguíneo')
            <p>
                O Temperamento {{session('resultadoFinalTemper')}} descreve uma pessoa que é alegre, comunicativo e sociável. Valorizando a diversão e a conexão com os outros, é extrovertido e entusiasta. Seu carisma natural o torna excelente em ambientes sociais e em papéis que envolvem interação com o público.
            </p>
            <p>
                Fisicamente, os sanguíneos têm uma postura mais relaxada e expressiva, muitas vezes com gestos amplos e sorrisos frequentes. São conhecidos por sua energia e entusiasmo contagiante.
            </p>
            <strong>Frases de Impacto Positivo: </strong>
            <ol>
                <li>"A vida é uma festa, aproveite cada momento."</li>
                <li>"A alegria é contagiante."</li>
                <li>"A conexão cria laços duradouros."</li>
                <li>"O entusiasmo abre portas."</li>
                <li>"A diversão é essencial para a felicidade."</li>
                <li>"A comunicação eficaz constrói pontes."</li>
                <li>"O carisma transforma encontros em amizades."</li>
                <li>"A energia positiva atrai oportunidades."</li>
                <li>"A espontaneidade traz novas aventuras."</li>
                <li>"Cada interação é uma chance de brilhar."</li>
            </ol>

            <strong>Estratégias de Comunicação: </strong>
            <ul>
                <li><strong>Enérgico e Entusiasta:</strong> Use uma comunicação animada e cheia de vida para envolver o público.</li>
                <li><strong>Histórias e Anedotas:</strong> Utilize histórias pessoais e anedotas para ilustrar pontos.</li>
                <li><strong>Simbolismo de Alegria:</strong> Utilize símbolos como o sol e cores vivas, como amarelo e laranja.</li>
                <li><strong>Eventos Sociais:</strong> Organize eventos e atividades que promovam a interação social.</li>
                <li><strong>Atualizações Dinâmicas:</strong> Mantenha o público informado com conteúdos variados e dinâmicos.</li>
            </ul>

            <strong>Exemplos Práticos: </strong>
            <ol>
                <li><strong>Organização de Eventos:</strong> Desenvolva guias para organizar eventos sociais e festas.</li>
                <li><strong>Ferramentas de Comunicação:</strong> Revise e recomende ferramentas que melhoram a comunicação e a interação.</li>
                <li><strong>Histórias de Sucesso:</strong> Publique artigos e vídeos contando histórias de momentos alegres e bem-sucedidos.</li>
                <li><strong>Eventos de Networking:</strong> Organize eventos para conectar pessoas e promover a socialização.</li>
                <li><strong>Workshops de Comunicação:</strong> Realize workshops para desenvolver habilidades de comunicação e carisma.</li>
            </ol>

            <strong>Funil de Vendas: </strong>
            <ul>
                <li><strong>Topo de Funil:</strong> Atraia potenciais mediadores com conteúdo sobre resolução de conflitos e técnicas de comunicação.</li>
                <li><strong>Meio de Funil:</strong> Eduque sobre estratégias de mediação eficaz, oferecendo cursos e ferramentas de comunicação.</li>
                <li><strong>Fundo de Funil:</strong> Feche vendas com programas de coaching personalizados e workshops exclusivos para mediadores.</li>
            </ul>

            <strong>Exemplo de Cenário para Fotos: </strong>
            <p>
                <strong>Localização:</strong> Festas, eventos sociais, parques ou outros ambientes alegres e vibrantes.
            </p>

            <strong>Pontos fortes: </strong>
            <ul>
                <li>Energia e entusiasmo</li>
                <li>Habilidade social e comunicativa</li>
                <li>Carisma natural</li>
            </ul>

            <strong>Pontos a desenvolver: </strong>
            <ul>
                <li>Foco e consistência</li>
                <li>Organização e pontualidade</li>
                <li>Gestão do tempo</li>
            </ul>

            <strong>Como Lidar com um Sanguíneo: </strong>
            <ul>
                <li><strong>Seja envolvente e animado:</strong> Sanguíneos respondem bem a interações enérgicas e positivas.</li>
                <li><strong>Valorize a espontaneidade:</strong> Incentive suas ideias e atividades criativas.</li>
                <li><strong>Promova a diversão:</strong> Inclua elementos de diversão e interação social em suas atividades.</li>
            </ul>

            <p>
                Cada temperamento tem suas próprias características físicas, comportamentais e maneiras únicas de se relacionar com o mundo, tornando essencial a compreensão e a adaptação das interações para construir relacionamentos mais fortes e produtivos. Com as estratégias e exemplos fornecidos, você estará bem com orientações para lidar eficazmente com cada temperamento e maximizar seu potencial em diversas situações.
            </p>

        @elseif(session('resultadoFinalTemper') == 'Colérico')
            <p>
                O Temperamento {{session('resultadoFinalTemper')}}, relacionado ao fogo, é atribuído às pessoas ousadas, dinâmicas e líderes natos, prontas para encarar desafios. Em desequilíbrio, podem se tornar agressivas, ditadoras e orgulhosas. O Colérico vive na ação, busca realizar e atingir objetivos, muitas vezes fazendo de si mesmo a imagem de um herói.
            </p>
            <p>
                Fisicamente, possui olhos cheios de fogo que faíscam quando contrariados e um andar de passos firmes. Geralmente, têm tronco grande para o tamanho das pernas, ombros largos, pescoço curto e testa alta. Vão em direção ao seu objetivo sem prestar muita atenção ao que acontece ao redor.
            </p>

            <strong>Frases de Impacto Positivo: </strong>
            <ol>
                <li>"A ação é o caminho para o sucesso."</li>
                <li>"Determinação é a chave para a vitória."</li>
                <li>"Desafios são oportunidades disfarçadas."</li>
                <li>"Lidere com coragem e inspire os outros."</li>
                <li>"A eficiência é a base da excelência."</li>
                <li>"Nada é impossível para quem tem força de vontade."</li>
                <li>"Cada obstáculo é uma chance de crescimento."</li>
                <li>"O sucesso é construído com determinação e esforço."</li>
                <li>"Vença com paixão e persistência."</li>
                <li>"A liderança começa com a ação."</li>
            </ol>

            <strong>Estratégias de Comunicação: </strong>
            <ul>
                <li><strong>Direto e Claro:</strong> Use uma comunicação assertiva e direta para transmitir confiança.</li>
                <li><strong>Resultados e Provas:</strong> Mostre evidências de sucesso e conquistas para inspirar ação.</li>
                <li><strong>Simbolismo de Força:</strong> Utilize símbolos como o leão e cores vibrantes, como vermelho e dourado.</li>
                <li><strong>Histórias de Sucesso:</strong> Compartilhe casos de sucesso e testemunhos de liderança eficaz.</li>
                <li><strong>Atualizações Constantes:</strong> Mantenha o público informado sobre novas estratégias e técnicas de eficiência.</li>
            </ul>

            <strong>Exemplos Práticos: </strong>
            <ol>
                <li><strong>Planos de Ação:</strong> Desenvolva guias práticos para alcançar objetivos de forma eficiente.</li>
                <li><strong>Ferramentas de Produtividade:</strong> Revise e recomende ferramentas que aumentam a eficiência no trabalho.</li>
                <li><strong>Histórias de Liderança:</strong> Publique artigos e vídeos contando histórias de líderes inspiradores.</li>
                <li><strong>Eventos de Networking:</strong> Organize eventos para conectar líderes e compartilhar melhores práticas.</li>
                <li><strong>Workshops de Liderança:</strong> Realize workshops para desenvolver habilidades de liderança e gestão de tempo.</li>
            </ol>

            <strong>Funil de Vendas: </strong>
            <ul>
                <li><strong>Topo de Funil:</strong> Atraia potenciais líderes com conteúdo sobre superação de desafios e dicas de produtividade.</li>
                <li><strong>Meio de Funil:</strong> Eduque sobre estratégias de liderança eficaz, oferecendo cursos e ferramentas de produtividade.</li>
                <li><strong>Fundo de Funil:</strong> Feche vendas com programas de coaching personalizados e workshops exclusivos para líderes.</li>
            </ul>

            <strong>Exemplo de Cenário para Fotos: </strong>
            <p>
                <strong>Localização:</strong> Ambientes de trabalho dinâmicos, conferências empresariais ou cenários de atividades desafiadoras.
            </p>

            <strong>Pontos fortes: </strong>
            <ul>
                <li>Liderança natural</li>
                <li>Determinação e foco</li>
                <li>Capacidade de inspirar e motivar</li>
            </ul>

            <strong>Pontos a desenvolver: </strong>
            <ul>
                <li>Paciência com processos</li>
                <li>Escuta ativa</li>
                <li>Empatia nas relações</li>
            </ul>

            <strong>Como Lidar com um Colérico: </strong>
            <ul>
                <li><strong>Enfrente-o, mas sem brigar:</strong> Olhe nos olhos dele e coloque seus pontos de vista calmamente e com firmeza.</li>
                <li><strong>Não tenha medo do chilique:</strong> Ele esquece rapidamente e o mais provável é que ele passe a respeitá-lo mais.</li>
                <li><strong>Desafie-o:</strong> Coléricos são movidos a desafios. Utilize essa energia para o autodesenvolvimento, dando-lhes tarefas que estejam um pouco além de suas capacidades.</li>
            </ul>

            <p>
                Cada temperamento tem suas próprias características físicas, comportamentais e maneiras únicas de se relacionar com o mundo, tornando essencial a compreensão e a adaptação das interações para construir relacionamentos mais fortes e produtivos. Com as estratégias e exemplos fornecidos, você estará bem com orientações para lidar eficazmente com cada temperamento e maximizar seu potencial em diversas situações.
            </p>

        @elseif(session('resultadoFinalTemper') == 'Melancólico')
            <p>
                O Temperamento {{session('resultadoFinalTemper')}} é analítico, detalhista e perfeccionista. Valorizando a precisão e a qualidade, é profundo em seus pensamentos e altamente criativo. Sua busca pela perfeição o torna excelente em planejamento e execução de tarefas complexas.
            </p>
            <p>
                Fisicamente, os melancólicos tendem a ter uma postura mais reservada, muitas vezes com uma aparência pensativa. São conhecidos por sua sensibilidade e capacidade de introspecção.
            </p>

            <strong>Frases de Impacto Positivo: </strong>
            <ol>
                <li>"A perfeição está nos detalhes."</li>
                <li>"A análise cuidadosa leva à excelência."</li>
                <li>"A criatividade floresce na profundidade."</li>
                <li>"A qualidade é o nosso legado."</li>
                <li>"Cada detalhe conta na busca pela perfeição."</li>
                <li>"O pensamento profundo gera soluções inovadoras."</li>
                <li>"A precisão é o caminho para o sucesso."</li>
                <li>"A beleza está na complexidade bem executada."</li>
                <li>"A paciência e o cuidado são virtudes valiosas."</li>
                <li>"A dedicação transforma sonhos em realidade."</li>
            </ol>

            <strong>Estratégias de Comunicação: </strong>
            <ul>
                <li><strong>Detalhe e Precisão:</strong> Use uma comunicação clara e detalhada para transmitir confiança.</li>
                <li><strong>Provas e Análises:</strong> Mostre evidências e análises detalhadas para suportar suas ideias.</li>
                <li><strong>Simbolismo de Precisão:</strong> Utilize símbolos como a balança e cores como azul e cinza.</li>
                <li><strong>Histórias de Sucesso:</strong> Compartilhe casos de sucesso baseados em análises e planejamento detalhado.</li>
                <li><strong>Atualizações Técnicas:</strong> Mantenha o público informado sobre novas técnicas e tecnologias.</li>
            </ul>

            <strong>Exemplos Práticos: </strong>
            <ol>
                <li><strong>Planos Detalhados:</strong> Desenvolva guias práticos com etapas detalhadas para a execução de projetos.</li>
                <li><strong>Ferramentas de Análise:</strong> Revise e recomende ferramentas que ajudam na análise e planejamento.</li>
                <li><strong>Histórias de Sucesso:</strong> Publique artigos e vídeos contando histórias de sucesso em projetos complexos.</li>
                <li><strong>Eventos de Capacitação:</strong> Organize eventos focados em técnicas de planejamento e análise.</li>
                <li><strong>Workshops de Criatividade:</strong> Realize workshops para desenvolver habilidades criativas e analíticas.</li>
            </ol>

            <strong>Funil de Vendas: </strong>
            <ul>
                <li><strong>Topo de Funil:</strong> Atraia potenciais planejadores com conteúdo sobre técnicas de análise e planejamento detalhado.</li>
                <li><strong>Meio de Funil:</strong> Eduque sobre estratégias de execução perfeita, oferecendo cursos e ferramentas de análise.</li>
                <li><strong>Fundo de Funil:</strong> Feche vendas com programas de coaching personalizados e workshops exclusivos para analistas.</li>
            </ul>

            <strong>Exemplo de Cenário para Fotos: </strong>
            <p>
                <strong>Localização:</strong> Escritórios bem organizados, bibliotecas, salas de reunião com gráficos e diagramas.
            </p>

            <strong>Pontos fortes: </strong>
            <ul>
                <li>Analítico e detalhista</li>
                <li>Alto padrão de qualidade</li>
                <li>Criatividade e profundidade</li>
            </ul>

            <strong>Pontos a desenvolver: </strong>
            <ul>
                <li>Flexibilidade em situações imprevistas</li>
                <li>Equilíbrio entre perfeição e eficiência</li>
                <li>Abertura para novas ideias sem críticas excessivas</li>
            </ul>

            <strong>Como Lidar com um Melancólico: </strong>
            <ul>
                <li><strong>Seja claro e detalhado:</strong> Melancólicos apreciam uma comunicação precisa e bem estruturada.</li>
                <li><strong>Valorize o trabalho deles:</strong> Reconheça e valorize o esforço e a qualidade do trabalho realizado.</li>
                <li><strong>Dê tempo para reflexão:</strong> Permita que eles analisem e planejem antes de tomar decisões.</li>
            </ul>

            <p>
                Cada temperamento tem suas próprias características físicas, comportamentais e maneiras únicas de se relacionar com o mundo, tornando essencial a compreensão e a adaptação das interações para construir relacionamentos mais fortes e produtivos. Com as estratégias e exemplos fornecidos, você estará bem com orientações para lidar eficazmente com cada temperamento e maximizar seu potencial em diversas situações.
            </p>
        @endif
    </div>

    </div>
</body>
</html>
