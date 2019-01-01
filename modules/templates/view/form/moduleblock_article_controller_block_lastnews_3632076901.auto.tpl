<div class="formbox" >
                
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                            
                                                                                            
                                                                                            
                                                    
                                    <table class="otable">
                                                                                                                    
                                <tr>
                                    <td class="otitle">{$elem.__indexTemplate->getTitle()}&nbsp;&nbsp;{if $elem.__indexTemplate->getHint() != ''}<a class="help-icon" title="{$elem.__indexTemplate->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__indexTemplate->getRenderTemplate() field=$elem.__indexTemplate}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__category->getTitle()}&nbsp;&nbsp;{if $elem.__category->getHint() != ''}<a class="help-icon" title="{$elem.__category->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__category->getRenderTemplate() field=$elem.__category}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__pageSize->getTitle()}&nbsp;&nbsp;{if $elem.__pageSize->getHint() != ''}<a class="help-icon" title="{$elem.__pageSize->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__pageSize->getRenderTemplate() field=$elem.__pageSize}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>