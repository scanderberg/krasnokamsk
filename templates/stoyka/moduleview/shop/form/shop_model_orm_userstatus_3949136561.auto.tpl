<div class="formbox" >
                
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                            
                                                                                            
                                                                                            
                                                    
                                    <table class="otable">
                                                                                                                    
                                <tr>
                                    <td class="otitle">{$elem.__title->getTitle()}&nbsp;&nbsp;{if $elem.__title->getHint() != ''}<a class="help-icon" title="{$elem.__title->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__title->getRenderTemplate() field=$elem.__title}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__bgcolor->getTitle()}&nbsp;&nbsp;{if $elem.__bgcolor->getHint() != ''}<a class="help-icon" title="{$elem.__bgcolor->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__bgcolor->getRenderTemplate() field=$elem.__bgcolor}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__type->getTitle()}&nbsp;&nbsp;{if $elem.__type->getHint() != ''}<a class="help-icon" title="{$elem.__type->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__type->getRenderTemplate() field=$elem.__type}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>