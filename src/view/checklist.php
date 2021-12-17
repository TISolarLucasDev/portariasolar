<div class="container mt-5">
    <form action="">
        <div class="form-group">
            <h5>Retorno ou saída</h5>
            <span>Tipo:</span>
            <select name="tipo">
                <option value=""></option>
                <option value="retorno">Retorno</option>
                <option value="saida">Saída</option>
            </select>
        </div>
        <div class="form-group">
            <h5>Equipamentos de segurança</h5>
            <span>Cinto de segurança Motorista/Passageiro em bom funcionamento?</span>
            <select name="cintos">
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Bancos bem fixos e presos a cabine?</span>
            <select name="bancos">
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Veículo possui macaco?</span>
            <select name="macao"> <!-- <- ???? -->
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Veículo possui chave de roda?</span>
            <select name="tipo">
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Veículo possui mão de força?</span>
            <select name="tipo">
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Veículo possui triângulo?</span>
            <select name="tipo">
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Observações:</span>
            <input type="text" name="obs">
        </div>
        <div class="form-group">
            <h5>Documentação</h5>
            <span>CLRV em dia?</span>
            <select name="crlv">
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">ATRASADO</option>
            </select>
            <br>
            <span>Veículo com licenciamento em dia?</span>
            <select name="licenciamento">
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">ATRASADO</option>
            </select>
            <br>
            <span>Veículo com AET em dia?</span>
            <select name="aet">
                <option value=""></option>
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">ATRASADO</option>
            </select>
            <br>
            <span>Certificado tacógrafo em dia?</span>
            <select name="certificadotacogrado">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">ATRASADO</option>
            </select>
            <br>
            <span>Observações:</span>
            <input type="text" name="obs">
        </div>
        <div class="form-group">
            <h5>Funcionamento/Segurança</h5>
            <span>Computador de bordo apresenta defeito?</span>
            <select name="computadordebordo">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Equipamentos apresenta defeito?</span>
            <select name="equipamentodefeito">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Portas em bom funcionamento? Fechando na chave?</span>
            <select name="portasfuncionamento">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Vidros e travas em bom funcionamento?</span>
            <select name="vidrosfuncionamento">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Freio de mão em bom funcionamento?</span>
            <select name="freiosfuncionamento">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Embreagem em bom funcionamento?</span>
            <select name="embrenhagemfuncionamento">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Câmbio de marcha em bom funcionamento?</span>
            <select name="marchafuncionamento">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Volante com folga?</span>
            <select name="volantefuncionamento">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Veículo desalinhado?</span>
            <select name="desalinhadofuncionamento">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
            <span>Observações:</span>
            <input type="text" name="obs">
        </div>
        <div class="form-group">
            <h5>Estrutura/Estética/Suspenção</h5>
            <span>Cabine em boas condições?</span>
            <select name="cabine">
                <option value=""></option>    
                <option value="s">SIM</option>
                <option value="n">NÃO</option>
                <option value="a">AVARIADO</option>
            </select>
            <br>
        </div>

        <button type="submit">Enviar</button>
    </form>
</div>