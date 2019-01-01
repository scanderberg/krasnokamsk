
                                            
                                            
    
                                    
            <tr>
                <td class="otitle">{$elem.__city_from->getTitle()}&nbsp;&nbsp;{if $elem.__city_from->getHint() != ''}<a class="help-icon" title="{$elem.__city_from->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__city_from->getRenderTemplate() field=$elem.__city_from}</td>
            </tr>
                                            
            <tr>
                <td class="otitle">{$elem.__tariff->getTitle()}&nbsp;&nbsp;{if $elem.__tariff->getHint() != ''}<a class="help-icon" title="{$elem.__tariff->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__tariff->getRenderTemplate() field=$elem.__tariff}</td>
            </tr>
                        