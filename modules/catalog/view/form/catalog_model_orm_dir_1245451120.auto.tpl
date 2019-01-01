<div class="formbox" >
            
    <div class="tabs">
        <ul class="tab-container">
                    <li class=" act first"><a data-view="tab0">{$elem->getPropertyIterator()->getGroupName(0)}</a></li>
                    <li class=""><a data-view="tab1">{$elem->getPropertyIterator()->getGroupName(1)}</a></li>
                    <li class=""><a data-view="tab2">{$elem->getPropertyIterator()->getGroupName(2)}</a></li>
                    <li class=""><a data-view="tab3">{$elem->getPropertyIterator()->getGroupName(3)}</a></li>
                    <li class=""><a data-view="tab4">{$elem->getPropertyIterator()->getGroupName(4)}</a></li>
                </ul>
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">    
            <input type="submit" value="" style="display:none"/>
                        <div class="frame" data-name="tab0">
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <table class="otable">
                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__name->getTitle()}&nbsp;&nbsp;{if $elem.__name->getHint() != ''}<a class="help-icon" title="{$elem.__name->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__name->getRenderTemplate() field=$elem.__name}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__alias->getTitle()}&nbsp;&nbsp;{if $elem.__alias->getHint() != ''}<a class="help-icon" title="{$elem.__alias->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__alias->getRenderTemplate() field=$elem.__alias}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__parent->getTitle()}&nbsp;&nbsp;{if $elem.__parent->getHint() != ''}<a class="help-icon" title="{$elem.__parent->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__parent->getRenderTemplate() field=$elem.__parent}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__public->getTitle()}&nbsp;&nbsp;{if $elem.__public->getHint() != ''}<a class="help-icon" title="{$elem.__public->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__public->getRenderTemplate() field=$elem.__public}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__image->getTitle()}&nbsp;&nbsp;{if $elem.__image->getHint() != ''}<a class="help-icon" title="{$elem.__image->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__image->getRenderTemplate() field=$elem.__image}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__weight->getTitle()}&nbsp;&nbsp;{if $elem.__weight->getHint() != ''}<a class="help-icon" title="{$elem.__weight->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__weight->getRenderTemplate() field=$elem.__weight}</td>
                                </tr>
                                
                                                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab1">
                                                    
                                                                                                                                                                                                                                                                            <table class="otable">
                                                                                            
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
                        <div class="frame nodisp" data-name="tab2">
                                                    
                                                                        {include file=$elem.____property__->getRenderTemplate() field=$elem.____property__}
                                                                                                                                                </div>
                        <div class="frame nodisp" data-name="tab3">
                                                    
                                                                                                                                    <table class="otable">
                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__description->getTitle()}&nbsp;&nbsp;{if $elem.__description->getHint() != ''}<a class="help-icon" title="{$elem.__description->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__description->getRenderTemplate() field=$elem.__description}</td>
                                </tr>
                                
                                                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab4">
                                                    
                                                                                                                                    <table class="otable">
                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__tax_ids->getTitle()}&nbsp;&nbsp;{if $elem.__tax_ids->getHint() != ''}<a class="help-icon" title="{$elem.__tax_ids->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__tax_ids->getRenderTemplate() field=$elem.__tax_ids}</td>
                                </tr>
                                
                                                                                    </table>
                                                </div>
                    </form>
    </div>
    </div>