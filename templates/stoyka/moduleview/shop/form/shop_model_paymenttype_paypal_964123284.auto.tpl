
                                            
                                            
                                            
                                            
    
                                    
            <tr>
                <td class="otitle">{$elem.__testmode->getTitle()}&nbsp;&nbsp;{if $elem.__testmode->getHint() != ''}<a class="help-icon" title="{$elem.__testmode->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__testmode->getRenderTemplate() field=$elem.__testmode}</td>
            </tr>
                                            
            <tr>
                <td class="otitle">{$elem.__bussiness_email->getTitle()}&nbsp;&nbsp;{if $elem.__bussiness_email->getHint() != ''}<a class="help-icon" title="{$elem.__bussiness_email->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__bussiness_email->getRenderTemplate() field=$elem.__bussiness_email}</td>
            </tr>
                                            
            <tr>
                <td class="otitle">{$elem.__culture->getTitle()}&nbsp;&nbsp;{if $elem.__culture->getHint() != ''}<a class="help-icon" title="{$elem.__culture->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__culture->getRenderTemplate() field=$elem.__culture}</td>
            </tr>
                                            
            <tr>
                <td class="otitle">{$elem.____help__->getTitle()}&nbsp;&nbsp;{if $elem.____help__->getHint() != ''}<a class="help-icon" title="{$elem.____help__->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.____help__->getRenderTemplate() field=$elem.____help__}</td>
            </tr>
                        