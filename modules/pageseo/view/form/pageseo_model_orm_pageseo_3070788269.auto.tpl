<div class="formbox" >
                
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                    
                                    <table class="otable">
                                                                                                                    
                                <tr>
                                    <td class="otitle">{$elem.__route_id->getTitle()}&nbsp;&nbsp;{if $elem.__route_id->getHint() != ''}<a class="help-icon" title="{$elem.__route_id->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__route_id->getRenderTemplate() field=$elem.__route_id}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__meta_title->getTitle()}&nbsp;&nbsp;{if $elem.__meta_title->getHint() != ''}<a class="help-icon" title="{$elem.__meta_title->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__meta_title->getRenderTemplate() field=$elem.__meta_title}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__meta_keywords->getTitle()}&nbsp;&nbsp;{if $elem.__meta_keywords->getHint() != ''}<a class="help-icon" title="{$elem.__meta_keywords->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__meta_keywords->getRenderTemplate() field=$elem.__meta_keywords}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__meta_description->getTitle()}&nbsp;&nbsp;{if $elem.__meta_description->getHint() != ''}<a class="help-icon" title="{$elem.__meta_description->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__meta_description->getRenderTemplate() field=$elem.__meta_description}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>