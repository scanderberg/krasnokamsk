<div class="formbox" >
                
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                    
                                    <table class="otable">
                                                                                                                    
                                <tr>
                                    <td class="otitle">{$elem.__code->getTitle()}&nbsp;&nbsp;{if $elem.__code->getHint() != ''}<a class="help-icon" title="{$elem.__code->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__code->getRenderTemplate() field=$elem.__code}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__icode->getTitle()}&nbsp;&nbsp;{if $elem.__icode->getHint() != ''}<a class="help-icon" title="{$elem.__icode->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__icode->getRenderTemplate() field=$elem.__icode}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__title->getTitle()}&nbsp;&nbsp;{if $elem.__title->getHint() != ''}<a class="help-icon" title="{$elem.__title->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__title->getRenderTemplate() field=$elem.__title}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__stitle->getTitle()}&nbsp;&nbsp;{if $elem.__stitle->getHint() != ''}<a class="help-icon" title="{$elem.__stitle->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__stitle->getRenderTemplate() field=$elem.__stitle}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>