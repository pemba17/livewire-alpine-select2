@props([
    'options'
])
<div x-data="{
    multiple:{{isset($attributes['multiple'])?'true':'false'}},
    value:@entangle($attributes['wire:model']),
    options:@js($options),
    init(){
        let bootSelect=()=>{
            let selections=this.multiple?this.value:[this.value]
            $(this.$refs.{{$attributes['id']}}).select2({
                multiple:this.multiple,
                data:this.options.map(i=>({
                    id:i.value,
                    text:i.label,
                    selected:selections.map(i=>String(i)).includes(String(i.value))
                }))
            })
        }

        let refreshSelect2=()=>{
            $(this.$refs.{{$attributes['id']}}).select2('destroy')
            this.$refs.{{$attributes['id']}}.innerHTML=''
            bootSelect()  
        }

        bootSelect()

        $(this.$refs.{{$attributes['id']}}).on('change',()=>{
            let currentSelection=$(this.$refs.{{$attributes['id']}}).select2('data');
            this.value=this.multiple?currentSelection.map(i=>i.id):currentSelection[0].id
        })

        this.$watch('value',()=>refreshSelect2())
    },

}">
    <div wire:ignore>
        <select x-ref="{{$attributes['id']}}" {{$attributes->merge([
            'class'=>'custom'
        ])}}></select>
        <div>Selected:<span x-text="JSON.stringify(value)"></span></div>
    </div> 
</div>




