
                                            
                                            
                                            
                                            
    
                                    
            <tr>
                <td class="otitle">{$elem.__payurl->getTitle()}&nbsp;&nbsp;{if $elem.__payurl->getHint() != ''}<a class="help-icon" title="{$elem.__payurl->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__payurl->getRenderTemplate() field=$elem.__payurl}</td>
            </tr>
                                            
            <tr>
                <td class="otitle">{$elem.__merchant_id->getTitle()}&nbsp;&nbsp;{if $elem.__merchant_id->getHint() != ''}<a class="help-icon" title="{$elem.__merchant_id->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__merchant_id->getRenderTemplate() field=$elem.__merchant_id}</td>
            </tr>
                                            
            <tr>
                <td class="otitle">{$elem.__secret_word->getTitle()}&nbsp;&nbsp;{if $elem.__secret_word->getHint() != ''}<a class="help-icon" title="{$elem.__secret_word->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__secret_word->getRenderTemplate() field=$elem.__secret_word}</td>
            </tr>
                                            
            <tr>
                <td class="otitle">{$elem.____help__->getTitle()}&nbsp;&nbsp;{if $elem.____help__->getHint() != ''}<a class="help-icon" title="{$elem.____help__->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.____help__->getRenderTemplate() field=$elem.____help__}</td>
            </tr>
                        