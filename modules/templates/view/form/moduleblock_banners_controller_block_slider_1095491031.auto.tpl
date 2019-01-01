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
                                    <td class="otitle">{$elem.__zone->getTitle()}&nbsp;&nbsp;{if $elem.__zone->getHint() != ''}<a class="help-icon" title="{$elem.__zone->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__zone->getRenderTemplate() field=$elem.__zone}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>