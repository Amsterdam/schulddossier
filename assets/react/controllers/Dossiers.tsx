interface DossiersProps {
    fullName: string;
}

export default function Dossiers(props: Readonly<DossiersProps>) {
    return <div>Dossier van {props.fullName}</div>;
}
