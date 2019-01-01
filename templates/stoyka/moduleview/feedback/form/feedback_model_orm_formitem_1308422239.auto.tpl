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
                                    <td class="otitle">{$elem.__email->getTitle()}&nbsp;&nbsp;{if $elem.__email->getHint() != ''}<a class="help-icon" title="{$elem.__email->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__email->getRenderTemplate() field=$elem.__email}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__subject->getTitle()}&nbsp;&nbsp;{if $elem.__subject->getHint() != ''}<a class="help-icon" title="{$elem.__subject->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__subject->getRenderTemplate() field=$elem.__subject}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__template->getTitle()}&nbsp;&nbsp;{if $elem.__template->getHint() != ''}<a class="help-icon" title="{$elem.__template->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__template->getRenderTemplate() field=$elem.__template}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__successMessage->getTitle()}&nbsp;&nbsp;{if $elem.__successMessage->getHint() != ''}<a class="help-icon" title="{$elem.__successMessage->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__successMessage->getRenderTemplate() field=$elem.__successMessage}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__use_captcha->getTitle()}&nbsp;&nbsp;{if $elem.__use_captcha->getHint() != ''}<a class="help-icon" title="{$elem.__use_captcha->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__use_captcha->getRenderTemplate() field=$elem.__use_captcha}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>