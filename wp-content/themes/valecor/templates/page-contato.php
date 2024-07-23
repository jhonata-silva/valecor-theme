<?php

/**
 * Valecor functions and definitions
 *
 * @link http://www.valecorseguros.com.br
 *
 * @package 
 * @subpackage 
 * @since 
 * 
 * Template Name: Contato
 * 
 */


get_header();

get_header( 'paginas' );
?>


<!--Destaque-->
<section class="destaque-contato">
    <div class="overlay">
        <div class="container align-items-center text-center">
            <h1>Estamos Aqui para Ajudá-lo</h1>
            <ul class="destaque-list text-aling">
                <li class="d-flex mx-2">
                    <i class="material-icons icon-rodape">location_on</i>
                </li>
                <li class="d-flex mx-2">
                    <i class="material-icons icon-rodape">call</i>
                </li>
                <li class="d-flex mx-2">
                    <i class="material-icons icon-rodape">mail</i>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Destaque-->

<!--Sobre-->
<section class="espacamento-sobre-contato">
    <div class="container align-items-center largura">
        <div class="row ">
            <div class="col-md-12 col-lg-6">
                <h2 class="titulo-sobre-sobre">Fale Conosco - Sempre a Sua Disposição</h2>
                <p>Entre em contato conosco. Estamos prontos para te ajudar e oferecer o melhor serviço!
                    Basta preencher o formulário e em breve entraremos em contato.</p>
            </div>
            <div class="col-md-12 col-lg-6">
                <form class="meu-formulario">
                    <div>
                        <label for="nome">Nome:</label><br>
                        <input type="text" id="nome" name="nome" style="width: 100%;" required><br>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <div style="width: 48%;">
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email" style="width: 100%;" required><br>
                        </div>
                        <div style="width: 48%;">
                            <label for="telefone">Telefone:</label><br>
                            <input type="tel" id="telefone" name="telefone" style="width: 100%;" required><br>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <div style="width: 48%;">
                            <label for="data-nascimento">Data de Nascimento:</label><br>
                            <input type="date" id="data-nascimento" name="data-nascimento" style="width: 100%;" required><br>
                        </div>
                        <div style="width: 48%;">
                            <label for="estado">Estado:</label><br>
                            <select id="estado" name="estado" style="width: 100%;" required>
                                <option value="">Selecione...</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select><br>
                        </div>
                    </div>
                    <div class="checkbox-container">
                        <label class="form-check-label" for="cnpj"> <input type="checkbox" id="cnpj" name="cnpj" required> Possui CNPJ ?</label>
                    </div>
                    <div class="checkbox-container">

                        <label for="permissao"> <input type="checkbox" id="permissao" name="permissao" required> Concordo que Valeor Seguros pode coletar, registrar e armazenar meus dados pessoais informados neste formulário para fins de envio de ofertas de produtos comercializados por ela. Autorizo ainda a compartilhar estas informações com empresas parceiras de Valeor Seguros para esse fim. Estou ciente de que posso receber mensagens de marketing e ofertas de produtos da Valeor Seguros e seus parceiros de negócio. Ao enviar este formulário, confirmo ter lido e concordado com os termos desta autorização.</label><br>
                    </div>
                    <div>
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Fim de Sobre -->
<?php get_footer() ?>