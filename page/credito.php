<script>
    function total($x){
        var x='Total de processos encontrados ('+$x+')';
        document.getElementById('total').innerHTML=x;
    }
</script>
<?php
header('Content-type: text/html; charset=UTF-8');

 /*
    @$filename=$_GET['arquivo'];
    $mode='r';
    @$handle=fopen($filename, $mode);
    
    @$dados=file($filename);
    @$conteudo = fread ($handle, filesize ($filename));
    
    @fclose($handle);
 
 */   
    echo "<div id=total ></div>";
    $Tododao=new TodoDao();
    $Todosearch=new TodoSearchCriteria();
    $Odbcdao=new OdbcDao();
    $Odbcsearch=new OdbcSearchCriteria();
    //$Todo=new Todo();
    //$odbc=new Odbc();
    $Oracledao=new OracleDao();
    $Oraclesearch=new OracleSearchCriteria();
    
    $Judidao=new JudiDao();
    $Judisearch=new JudiSearchCriteria();
    //$oracle=new Odbc();die;
    
    //print_r($Odbcsearch);die;
    
    //print_r(get_class_methods($Judidao));die;
            
    //print_r(get_class_methods($Odbcdao));die;
    //print_r($Judisearch);die;
    //die;
    
    //$judis=$Judidao->listacredito($Judisearch);// tabela credito
    //if($Judisearch){
       $judis=$Judidao->listaCreditoAdministrativo($Judisearch);// tabela transito x credito
    //}
    //echo "<pre>";
    //print_r($judis);die;
    
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<tr><th>PASTA</th><th>SEGURADO_mon2</th><th>ASSINATURA_mon2</th><th>N_SIN_ADM_mon2</th><th>DT_SIN_mon2</th><th>N_PROC_JUD_CNJ_mon2</th><th>N_ANTIGO_mon2</th><th>UF_CIDADE_mon2</th><th>COMARCA_mon2</th><th>FORO_mon2</th><th>VARA_mon2</th><th>HABILITANTE_mon2</th><th>VL_CERT_CRED_mon2</th><th>DT_CRED_mon2</th><th>OBSEVACAO_mon2</th>"
      ."<th>SEGURADO_lev</th><th>PARTE_CONTRARIA_lev</th><th>VALOR_PEDIDO_lev</th><th>VALOR_ADMINISTRATIVO_lev</th><th>HONORARIOS_lev</th><th>POSSIVEL_lev</th><th>PROVAVEL_lev</th><th>DIGITADOR_lev</th><th>id_lev</th><th>APOLICE_h</th><th>ENDOSSO_h</th><th>SINISTRO_h</th><th>DT_AVISO_h</th><th>TITULAR_h</th><th>CPF_h</th><th>IMPORTANCIA_SEGURADA_h</th><th>CORRECAO_IGPM_h</th><th>CORRECAO_TR_h</th><th>id_h</th>";
      
      //. "<th>N&Uacute;MERO CNJ / ANTIGO</th><th>Natureza</th><th>UF</th><th>SINISTRO</th><th>SEGURADO</th><th>AVISO</th><th>SEGURADO_cre</th><th>PARTE CONTR&Aacute;RIA</th><th>VALOR DEFERIDO</th><th>VALOR DA CAUSA</th><th>VALOR DA CONDENA&Ccedil;&Atilde;O</th><th>VALOR DA CERTID&Atilde;O DE CR&Eacute;DITO</th><th>HONOR&Aacute;RIOS</th><th>VALOR ADMINISTRATIVO</th></tr>";
      



    //die;
     //echo "<pre>";
        //print_r($judis);
     //echo "</pre>";die;
      $x=0;
     foreach($judis as $judi){
      /*
            $segurado=JudiValidator::tirarAcento($judi->getSegurado_tra());
            
            $tabela='sinipend';
            $campo='TITULAR';
            $busca=$segurado;
            //print_r($judis);die;
            
            $Odbcsearch->setTITULAR($segurado);
            //print_r($Odbcsearch->getTITULAR());die;
            if($Odbcsearch->getTITULAR()){
                //echo "<h1>".$Odbcsearch->getTITULAR()."</h1>";die;
                $odbcs=$Odbcdao->busca7($Odbcsearch);
            //PRINT_R($odbcs);die;
                if($odbcs){
                    foreach($odbcs as $item){
                        //print_r($item);die;
                        $nome=$item->getTITULAR();
                        $sinistro=$item->getSINISTRO();
                        $impSegurado=$item->getIMPORTANCIA_SEGURADA();
                        $aviso=$item->getDT_AVISO();
                    }
                    $Todosearch->setSINISTRO($sinistro);
                    $henr=$Tododao->find8($Todosearch);
                    //print_r($henr);//die;
                    if($henr){
                        foreach($henr as $item2){
                            if($sinistro == $item2->getSINISTRO()){
                                //print_r($item2);die;
                                $impSegurado_tr=$item2->getCORRECAO_TR();
                                //print_r($item2);
                            }
                        }
                    }else{
                       $impSegurado_tr=null;
                    }
                }
            }else{
                $nome=null;
                $sinistro=null;
                $impSegurado=null;
                $aviso=null;
                $impSegurado_tr=null;
            }
       * 
       */
            //echo $judi->getHonorarios_tra();
            //die;
                //echo "<pre>";
                //print_r($judi);die;
                    echo "<tr><td>";
                    echo $judi->getPASTA();
                    echo "</td><td>";
                    echo $judi->getSEGURADO_mon2();
                    echo "</td><td>";
                    echo $judi->getASSINATURA_mon2();
                    echo "</td><td>";
                    echo $judi->getN_SIN_ADM_mon2();
                    echo "</td><td>";
                    echo $judi->getDT_SIN_mon2();
                    echo "</td><td>";
                    echo $judi->getN_PROC_JUD_CNJ_mon2();
                    echo "</td><td>";
                    echo $judi->getN_ANTIGO_mon2();
                    echo "</td><td>";
                    echo $judi->getUF_CIDADE_mon2();
                    echo "</td><td>";
                    echo $judi->getCOMARCA_mon2();
                    echo "</td><td>";
                    echo $judi->getFORO_mon2();
                    echo "</td><td>";
                    echo $judi->getVARA_mon2();
                    echo "</td><td>";
                    echo $judi->getHABILITANTE_mon2();
                    echo "</td><td>";
                    echo $judi->getVL_CERT_CRED_mon2();
                    echo "</td><td>";
                    echo $judi->getDT_CRED_mon2();
                    echo "</td><td>";
                    echo $judi->getOBSEVACAO_mon2();
                    echo "</td><td>";
                    echo $judi->getSEGURADO_lev();
                    echo "</td><td>";
                    echo $judi->getPARTE_CONTRARIA_lev();
                    echo "</td><td>";
                    echo $judi->getVALOR_PEDIDO_lev();
                    echo "</td><td>";
                    echo $judi->getVALOR_ADMINISTRATIVO_lev();
                    echo "</td><td>";
                    echo $judi->getHONORARIOS_lev();
                    echo "</td><td>";
                    echo $judi->getPOSSIVEL_lev();
                    echo "</td><td>";
                    echo $judi->getPROVAVEL_lev();
                    echo "</td><td>";
                    echo $judi->getDIGITADOR_lev();
                    echo "</td><td>";
                    echo $judi->getid_lev();
                    echo "</td><td>";
                    echo $judi->getAPOLICE_h();
                    echo "</td><td>";
                    echo $judi->getENDOSSO_h();
                    echo "</td><td>";
                    echo $judi->getSINISTRO_h();
                    echo "</td><td>";
                    echo $judi->getDT_AVISO_h();
                    echo "</td><td>";
                    echo $judi->getTITULAR_h();
                    echo "</td><td>";
                    echo $judi->getCPF_h();
                    echo "</td><td>";
                    echo $judi->getIMPORTANCIA_SEGURADA_h();
                    echo "</td><td>";
                    echo $judi->getCORRECAO_IGPM_h();
                    echo "</td><td>";
                    echo $judi->getCORRECAO_TR_h();
                    echo "</td><td>";
                    echo $judi->getid_h();
                    echo "</td></tr>";
                    
             /*       
                    echo $judi->getNumero_CNJ_Antigo_mon();
                    echo "</td><td>";
                    echo $judi->getNatureza_mon();
                    echo "</td><td>";
                    echo $judi->getUF_mon();
                    echo "</td><td>";
                    echo $judi->getSINISTRO_lev();
                    echo "</td><td>";
                    echo mb_strtoupper($judi->getTITULAR_h());
                    echo "</td><td>";
                    echo $judi->getDT_AVISO_h();
                    echo "</td><td>";
                    echo mb_strtoupper($judi->getSegurado_mon());
                    echo "</td><td>";
                    echo mb_strtoupper($judi->getParte_contraria_mon());
                    echo "</td><td align=right>";
                    echo $judi->getVlr_Deferido_mon();
                    echo "</td><td align=right>";
                    echo $judi->getVlr_Da_causa_mon();
                    echo "</td><td align=right>";
                    echo $judi->getVlr_Condenação_mon();
                    //echo "</td><td align=right>";
                    //echo number_format($item2->getIMPORTANCIA_SEGURADA(),'2',',','.');
                    echo "</td><td align=right>";
                    echo $judi->getVlr_certidao_de_credito_mon();
                    echo "</td><td align=right>";
                    echo $judi->getHonorarios_mon();
                    echo "</td><td align=right>";
                    echo $judi->getCORRECAO_TR_h();
                    echo "</td></tr>";
                    $nome=null;
                    $sinistro=null;
                    $impSegurado=null;
                    $aviso=null;
                    $impSegurado_tr=null;
                 
                    //if($x=200){
                        //die;
                    //}
                    //$x++;
              * 
              */
     }
     
     echo "</table>";
?>