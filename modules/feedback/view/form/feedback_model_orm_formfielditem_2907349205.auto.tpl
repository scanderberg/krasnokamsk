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
                                    <td class="otitle">{$elem.__alias->getTitle()}&nbsp;&nbsp;{if $elem.__alias->getHint() != ''}<a class="help-icon" title="{$elem.__alias->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__alias->getRenderTemplate() field=$elem.__alias}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__hint->getTitle()}&nbsp;&nbsp;{if $elem.__hint->getHint() != ''}<a class="help-icon" title="{$elem.__hint->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__hint->getRenderTemplate() field=$elem.__hint}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__form_id->getTitle()}&nbsp;&nbsp;{if $elem.__form_id->getHint() != ''}<a class="help-icon" title="{$elem.__form_id->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__form_id->getRenderTemplate() field=$elem.__form_id}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__required->getTitle()}&nbsp;&nbsp;{if $elem.__required->getHint() != ''}<a class="help-icon" title="{$elem.__required->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__required->getRenderTemplate() field=$elem.__required}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__length->getTitle()}&nbsp;&nbsp;{if $elem.__length->getHint() != ''}<a class="help-icon" title="{$elem.__length->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__length->getRenderTemplate() field=$elem.__length}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__show_type->getTitle()}&nbsp;&nbsp;{if $elem.__show_type->getHint() != ''}<a class="help-icon" title="{$elem.__show_type->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__show_type->getRenderTemplate() field=$elem.__show_type}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__anwer_list->getTitle()}&nbsp;&nbsp;{if $elem.__anwer_list->getHint() != ''}<a class="help-icon" title="{$elem.__anwer_list->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__anwer_list->getRenderTemplate() field=$elem.__anwer_list}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__as_radio->getTitle()}&nbsp;&nbsp;{if $elem.__as_radio->getHint() != ''}<a class="help-icon" title="{$elem.__as_radio->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__as_radio->getRenderTemplate() field=$elem.__as_radio}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__file_size->getTitle()}&nbsp;&nbsp;{if $elem.__file_size->getHint() != ''}<a class="help-icon" title="{$elem.__file_size->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__file_size->getRenderTemplate() field=$elem.__file_size}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__file_ext->getTitle()}&nbsp;&nbsp;{if $elem.__file_ext->getHint() != ''}<a class="help-icon" title="{$elem.__file_ext->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__file_ext->getRenderTemplate() field=$elem.__file_ext}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__use_mask->getTitle()}&nbsp;&nbsp;{if $elem.__use_mask->getHint() != ''}<a class="help-icon" title="{$elem.__use_mask->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__use_mask->getRenderTemplate() field=$elem.__use_mask}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__mask->getTitle()}&nbsp;&nbsp;{if $elem.__mask->getHint() != ''}<a class="help-icon" title="{$elem.__mask->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__mask->getRenderTemplate() field=$elem.__mask}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__error_text->getTitle()}&nbsp;&nbsp;{if $elem.__error_text->getHint() != ''}<a class="help-icon" title="{$elem.__error_text->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__error_text->getRenderTemplate() field=$elem.__error_text}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>