interface DossiersProps {
    fullName: string;
}

export default function Dossiers(props: DossiersProps) {
    return <div>Dossier van {props.fullName}</div>;
}
