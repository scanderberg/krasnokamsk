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
                                    <td class="otitle">{$elem.__xregion->getTitle()}&nbsp;&nbsp;{if $elem.__xregion->getHint() != ''}<a class="help-icon" title="{$elem.__xregion->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__xregion->getRenderTemplate() field=$elem.__xregion}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>