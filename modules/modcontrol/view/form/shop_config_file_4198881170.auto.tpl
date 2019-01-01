<div class="formbox" >
    {if $elem._before_form_template}{include file=$elem._before_form_template}{/if}

            
    <div class="tabs">
        <ul class="tab-container">
                    <li class=" act first"><a data-view="tab0">{$elem->getPropertyIterator()->getGroupName(0)}</a></li>
                    <li class=""><a data-view="tab1">{$elem->getPropertyIterator()->getGroupName(1)}</a></li>
                    <li class=""><a data-view="tab2">{$elem->getPropertyIterator()->getGroupName(2)}</a></li>
                </ul>
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">    
            <input type="submit" value="" style="display:none">
                        <div class="frame" data-name="tab0">
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <table class="otable">
                                                        
                            <tr>
                                <td class="otitle">{$elem.__name->getTitle()}&nbsp;&nbsp;{if $elem.__name->getHint() != ''}<a class="help-icon" title="{$elem.__name->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__name->getRenderTemplate() field=$elem.__name}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__description->getTitle()}&nbsp;&nbsp;{if $elem.__description->getHint() != ''}<a class="help-icon" title="{$elem.__description->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__description->getRenderTemplate() field=$elem.__description}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__version->getTitle()}&nbsp;&nbsp;{if $elem.__version->getHint() != ''}<a class="help-icon" title="{$elem.__version->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__version->getRenderTemplate() field=$elem.__version}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__core_version->getTitle()}&nbsp;&nbsp;{if $elem.__core_version->getHint() != ''}<a class="help-icon" title="{$elem.__core_version->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__core_version->getRenderTemplate() field=$elem.__core_version}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__author->getTitle()}&nbsp;&nbsp;{if $elem.__author->getHint() != ''}<a class="help-icon" title="{$elem.__author->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__author->getRenderTemplate() field=$elem.__author}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__enabled->getTitle()}&nbsp;&nbsp;{if $elem.__enabled->getHint() != ''}<a class="help-icon" title="{$elem.__enabled->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__enabled->getRenderTemplate() field=$elem.__enabled}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__basketminlimit->getTitle()}&nbsp;&nbsp;{if $elem.__basketminlimit->getHint() != ''}<a class="help-icon" title="{$elem.__basketminlimit->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__basketminlimit->getRenderTemplate() field=$elem.__basketminlimit}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__check_quantity->getTitle()}&nbsp;&nbsp;{if $elem.__check_quantity->getHint() != ''}<a class="help-icon" title="{$elem.__check_quantity->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__check_quantity->getRenderTemplate() field=$elem.__check_quantity}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__first_order_status->getTitle()}&nbsp;&nbsp;{if $elem.__first_order_status->getHint() != ''}<a class="help-icon" title="{$elem.__first_order_status->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__first_order_status->getRenderTemplate() field=$elem.__first_order_status}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__discount_code_len->getTitle()}&nbsp;&nbsp;{if $elem.__discount_code_len->getHint() != ''}<a class="help-icon" title="{$elem.__discount_code_len->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__discount_code_len->getRenderTemplate() field=$elem.__discount_code_len}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__user_orders_page_size->getTitle()}&nbsp;&nbsp;{if $elem.__user_orders_page_size->getHint() != ''}<a class="help-icon" title="{$elem.__user_orders_page_size->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__user_orders_page_size->getRenderTemplate() field=$elem.__user_orders_page_size}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__use_personal_account->getTitle()}&nbsp;&nbsp;{if $elem.__use_personal_account->getHint() != ''}<a class="help-icon" title="{$elem.__use_personal_account->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__use_personal_account->getRenderTemplate() field=$elem.__use_personal_account}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__reservation->getTitle()}&nbsp;&nbsp;{if $elem.__reservation->getHint() != ''}<a class="help-icon" title="{$elem.__reservation->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__reservation->getRenderTemplate() field=$elem.__reservation}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__allow_concomitant_count_edit->getTitle()}&nbsp;&nbsp;{if $elem.__allow_concomitant_count_edit->getHint() != ''}<a class="help-icon" title="{$elem.__allow_concomitant_count_edit->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__allow_concomitant_count_edit->getRenderTemplate() field=$elem.__allow_concomitant_count_edit}</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab1">
                                                    
                                                                        {include file=$elem.____userfields__->getRenderTemplate() field=$elem.____userfields__}
                                                                                                                        </div>
                        <div class="frame nodisp" data-name="tab2">
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <table class="otable">
                                                        
                            <tr>
                                <td class="otitle">{$elem.__require_address->getTitle()}&nbsp;&nbsp;{if $elem.__require_address->getHint() != ''}<a class="help-icon" title="{$elem.__require_address->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__require_address->getRenderTemplate() field=$elem.__require_address}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__require_license_agree->getTitle()}&nbsp;&nbsp;{if $elem.__require_license_agree->getHint() != ''}<a class="help-icon" title="{$elem.__require_license_agree->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__require_license_agree->getRenderTemplate() field=$elem.__require_license_agree}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__license_agreement->getTitle()}&nbsp;&nbsp;{if $elem.__license_agreement->getHint() != ''}<a class="help-icon" title="{$elem.__license_agreement->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__license_agreement->getRenderTemplate() field=$elem.__license_agreement}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__use_generated_order_num->getTitle()}&nbsp;&nbsp;{if $elem.__use_generated_order_num->getHint() != ''}<a class="help-icon" title="{$elem.__use_generated_order_num->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__use_generated_order_num->getRenderTemplate() field=$elem.__use_generated_order_num}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__generated_ordernum_mask->getTitle()}&nbsp;&nbsp;{if $elem.__generated_ordernum_mask->getHint() != ''}<a class="help-icon" title="{$elem.__generated_ordernum_mask->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__generated_ordernum_mask->getRenderTemplate() field=$elem.__generated_ordernum_mask}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__generated_ordernum_numbers->getTitle()}&nbsp;&nbsp;{if $elem.__generated_ordernum_numbers->getHint() != ''}<a class="help-icon" title="{$elem.__generated_ordernum_numbers->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__generated_ordernum_numbers->getRenderTemplate() field=$elem.__generated_ordernum_numbers}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__zipcode_required->getTitle()}&nbsp;&nbsp;{if $elem.__zipcode_required->getHint() != ''}<a class="help-icon" title="{$elem.__zipcode_required->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__zipcode_required->getRenderTemplate() field=$elem.__zipcode_required}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__hide_delivery->getTitle()}&nbsp;&nbsp;{if $elem.__hide_delivery->getHint() != ''}<a class="help-icon" title="{$elem.__hide_delivery->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__hide_delivery->getRenderTemplate() field=$elem.__hide_delivery}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__hide_payment->getTitle()}&nbsp;&nbsp;{if $elem.__hide_payment->getHint() != ''}<a class="help-icon" title="{$elem.__hide_payment->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__hide_payment->getRenderTemplate() field=$elem.__hide_payment}</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                    </form>
    </div>
    </div>